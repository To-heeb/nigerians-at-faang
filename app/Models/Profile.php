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
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Profile extends Model implements Sitemapable, Viewable
{
    /** @use HasFactory<\Database\Factories\ProfileFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'slug',
        'image',
        'views',
        'job_title',
        'company_id',
        'linkedin_url',
        'twitter_url',
        'website_url',
        'instagram_url',
        'tiktok_url',
        'short_bio',
        'nominated_by',
        'is_approved',
        'approved_at',
        'is_published',
        'published_at',
        'is_featured',
        'featured_at',
        'last_featured_at',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'published_at' => 'datetime',
        'featured_at' => 'datetime'
    ];

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Automatically convert the name to lowercase before saving.
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    /**
     * Get the company that owns the profile.
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    /**
     * Get all of the tags for the profile.
     */
    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    /**
     * Get the profile that owns the blog.
     */
    public function blogs(): HasMany
    {
        return $this->hasMany(Blog::class);
    }

    /**
     * Scope a query to order by views_count
     */
    #[Scope]
    protected function mostViewed(Builder $query, $limit = 10)
    {
        return $query->orderByDesc('views_count')->take($limit);
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
    protected function latestWithCompany(Builder $query, ?int $limit = 4)
    {
        return $query->with('company')
            ->latest('published_at')
            ->take($limit);
    }

    /**
     * Scope a query to only include approved profile
     */
    #[Scope]
    protected function approved(Builder $query)
    {
        return $query->where('is_approved', true);
    }

    /**
     * Scope a query to only include unapproved profile
     */
    #[Scope]
    protected function unapproved(Builder $query)
    {
        return $query->where('is_approved', false);
    }

    /**
     * Scope a query to only include featured profile
     */
    #[Scope]
    protected function featured(Builder $query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Scope a query to only include unfeatured profile
     */
    #[Scope]
    protected function unfeatured(Builder $query)
    {
        return $query->where('is_featured', false);
    }

    /**
     * Scope a query to only include published profile
     */
    #[Scope]
    protected function published(Builder $query)
    {
        return $query->where('is_published', true);
    }

    /**
     * Scope a query to only include  unpublished profile
     */
    #[Scope]
    protected function unpublished(Builder $query)
    {
        return $query->where('is_published', false);
    }

    /**
     * Scope a query to only include profiles that are approved, featured, and published.
     */
    #[Scope]
    protected function publiclyVisible(Builder $query)
    {
        return $query->where('is_approved', true)
            // ->where('is_featured', true)
            ->where('is_published', true);
    }

    /**
     * Scope a query to only include profiles that are approved, featured, and published.
     */
    #[Scope]
    protected function active(Builder $query)
    {
        return $query->where('is_approved', true)
            // ->where('is_featured', true)
            ->where('is_published', true);
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
     * Generate a sitemap tag for the profile model.
     *
     * This method returns a Url object that represents
     * the sitemap entry for this profile, including:
     * - The route to the profile's detail page.
     * - The last modification date.
     * - The change frequency (daily).
     * - The priority (0.1).
     *
     * @return \Spatie\Sitemap\Tags\Url|string|array
     */
    public function toSitemapTag(): Url | string | array
    {

        // Return with fine-grained control:
        return Url::create(route('profiles.show', $this))
            ->setLastModificationDate(Carbon::create($this->updated_at))
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            ->setPriority(0.1);
    }
}
