<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
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
        'company_id',
        'linkedin_url',
        'twitter_url',
        'website_url',
        'instagram_url',
        'tiktok_url',
        'short_bio',
        'is_published',
        'published_at',
    ];

    /**
     * Automatically convert the name to lowercase before saving.
     */
    public function setNameAttribute($value)
    {
        $this->attributes['slug'] = strtolower($value);
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
}
