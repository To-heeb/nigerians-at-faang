<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'slug',
        'logo',
        'about',
        'website',
        'industry',
        'mini_logo',
        'founded_at',
        'headquarters',
        'twitter_url',
        'youtube_url',
        'linkedin_url',
        'wikipedia_url',
        'information_website'
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
        $this->attributes['slug'] = Str::slug($value);
    }

    /**
     * Get the company that owns the profiles.
     */
    public function profiles(): HasMany
    {
        return $this->hasMany(Profile::class);
    }
}
