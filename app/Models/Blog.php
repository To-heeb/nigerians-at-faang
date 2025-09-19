<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Spatie\Sitemap\Tags\Url;
use App\Contracts\Models\Viewable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Spatie\Sitemap\Contracts\Sitemapable;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Blog extends Model implements Sitemapable, Viewable
{
    /** @use HasFactory<\Database\Factories\BlogFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'title',
        'slug',
        'body',
        'image',
        'views',
        'author',
        'profile_id',
        'is_published',
        'published_at',
        'is_featured',
        'featured_at',
        'last_featured_at',
    ];

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'published_at' => 'datetime'
    ];

    /**
     * Automatically convert the title to slug before saving.
     */
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    /**
     * Get all of the tags for the blog.
     */
    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    /**
     *  Get the profile that owns the blog.
     */
    public function profile(): BelongsTo
    {
        return $this->belongsTo(Profile::class);
    }

    /**
     * Scope a query to order by views_count
     */
    #[Scope]
    protected function mostViewed(Builder $query, $limit = 10)
    {
        return $query->orderByDesc('views')->take($limit);
    }

    /**
     * Scope a query to only include profiles that have at least one of the given tags.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param array $tags An array of tag names or IDs to filter profiles by.
     *                    Make sure to modify the query inside based on whether you're using names or IDs.
     * @return \Illuminate\Database\Eloquent\Builder
     */
    #[Scope]
    protected function withTags(Builder $query, array $tags)
    {
        return $query->whereHas('tags', function ($q) use ($tags) {
            $q->whereIn('name', $tags); // or use 'id' if you're passing tag IDs
        });
    }

    /**
     * Scope a query to only include latest profile with company.
     */
    #[Scope]
    protected function latestWithProfile(Builder $query, ?int $limit = 3)
    {
        return $query->with('profile')
            ->latest('published_at')
            ->take($limit);
    }

    /**
     * Scope a query to only include published blog
     */
    #[Scope]
    protected function published(Builder $query)
    {
        return $query->where('is_published', true);
    }

    /**
     * Scope a query to only include unpublished blog
     */
    #[Scope]
    protected function unpublished(Builder $query)
    {
        return $query->where('is_published', false);
    }

    /**
     * Increment the views for the given IDs.
     */
    public static function incrementViews(array $ids): void
    {
        self::withoutTimestamps(function () use ($ids): void {
            self::query()
                ->whereIn('id', $ids)
                ->increment('views');
        });
    }

    /**
     * Generate a sitemap tag for the company model.
     *
     * This method returns a Url object that represents
     * the sitemap entry for this company, including:
     * - The route to the company's detail page.
     * - The last modification date.
     * - The change frequency (weekly).
     * - The priority (0.1).
     *
     * @return \Spatie\Sitemap\Tags\Url|string|array
     */
    public function toSitemapTag(): Url | string | array
    {

        // Return with fine-grained control:
        return Url::create(route('blogs.show', $this))
            ->setLastModificationDate(Carbon::create($this->updated_at))
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            ->setPriority(0.1);
    }
}
