<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
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
        'profile_id',
        'is_published',
        'published_at',
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
     * Scope a query to only include latest profile with company.
     */
    #[Scope]
    protected function latestWithProfile($query, ?int $limit = 3)
    {
        return $query->with('profile')
            ->latest('published_at')
            ->take($limit);
    }

    /**
     * Scope a query to only include published blog
     */
    #[Scope]
    protected function published($query)
    {
        return $query->where('is_published', true);
    }

    /**
     * Scope a query to only include unpublished blog
     */
    #[Scope]
    protected function unpublished($query)
    {
        return $query->where('is_published', false);
    }
}
