<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Tag;
use Illuminate\Support\Str;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sitemap\Contracts\Sitemapable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
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
     * Get all of the tags for the company.
     */
    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable');
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
     * Get the top related companies based on shared industries.
     *
     * @param int $limit
     * @return \Illuminate\Support\Collection
     */
    public function relatedCompanies(int $limit = 10)
    {
        return self::where('companies.id', '!=', $this->id)
            ->select('companies.*')
            ->selectRaw('COUNT(company_industry.industry_id) as common_industries_count')
            ->join('company_industry', 'companies.id', '=', 'company_industry.company_id')
            ->whereIn('company_industry.industry_id', $this->industries()->pluck('industries.id'))
            ->groupBy('companies.id')
            ->orderByDesc('common_industries_count')
            ->limit($limit)
            ->get();
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
