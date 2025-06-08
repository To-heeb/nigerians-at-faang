<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Profile extends Model
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
        'job_title',
        'views_count',
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
     * Scope a query to only include latest profile with company.
     */
    #[Scope]
    protected function latestWithCompany($query, ?int $limit = 4)
    {
        return $query->with('company')
            ->latest('published_at')
            ->take($limit);
    }

    /**
     * Scope a query to only include approved profile
     */
    #[Scope]
    protected function approved($query)
    {
        return $query->where('is_approved', true);
    }

    /**
     * Scope a query to only include unapproved profile
     */
    #[Scope]
    protected function unapproved($query)
    {
        return $query->where('is_approved', false);
    }

    /**
     * Scope a query to only include featured profile
     */
    #[Scope]
    protected function featured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Scope a query to only include unfeatured profile
     */
    #[Scope]
    protected function unfeatured($query)
    {
        return $query->where('is_featured', false);
    }

    /**
     * Scope a query to only include published profile
     */
    #[Scope]
    protected function published($query)
    {
        return $query->where('is_published', true);
    }

    /**
     * Scope a query to only include  unpublished profile
     */
    #[Scope]
    protected function unpublished($query)
    {
        return $query->where('is_published', false);
    }

    /**
     * Scope a query to only include profiles that are approved, featured, and published.
     */
    #[Scope]
    protected function publiclyVisible($query)
    {
        return $query->where('is_approved', true)
            // ->where('is_featured', true)
            ->where('is_published', true);
    }
}
