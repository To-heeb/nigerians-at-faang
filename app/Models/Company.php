<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sitemap\Contracts\Sitemapable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Company extends Model implements Sitemapable
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
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    /**
     * Get the company that owns the profiles.
     */
    public function profiles(): HasMany
    {
        return $this->hasMany(Profile::class);
    }

    /**
     * The industries that belong to the company.
     */
    public function industries(): BelongsToMany
    {
        return $this->belongsToMany(Industry::class);
    }

    /**
     * Generate a sitemap tag for the company model.
     *
     * This method returns a Url object that represents
     * the sitemap entry for this company, including:
     * - The route to the company's detail page.
     * - The last modification date.
     * - The change frequency (daily).
     * - The priority (0.1).
     *
     * @return \Spatie\Sitemap\Tags\Url|string|array
     */
    public function toSitemapTag(): Url | string | array
    {

        // Return with fine-grained control:
        return Url::create(route('companies.show', $this))
            ->setLastModificationDate(Carbon::create($this->updated_at))
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            ->setPriority(0.1);
    }
}
