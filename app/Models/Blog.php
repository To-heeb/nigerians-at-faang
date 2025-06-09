<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Blog extends Model
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
        'author',
        'views_count',
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
     * Automatically convert the name to slug before saving.
     */
    public function setNameAttribute($value)
    {
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
}
