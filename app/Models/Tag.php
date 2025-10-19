<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Spatie\Sitemap\Tags\Url;
use App\Contracts\Models\Viewable;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sitemap\Contracts\Sitemapable;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Tag extends Model implements Sitemapable, Viewable
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'slug',
        'views'
    ];

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Automatically convert the name to slug before saving.
     */
    public function setNameAttribute($value)
    {
        $value = Str::lower($value);
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    /**
     * Get the parent taggable model (profile , blog and company).
     */
    public function taggable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * Get all of the profiles that are assigned this tag.
     */
    public function profiles(): MorphToMany
    {
        return $this->morphedByMany(Profile::class, 'taggable');
    }

    /**
     * Get all of the companies that are assigned this tag.
     */
    public function companies(): MorphToMany
    {
        return $this->morphedByMany(Company::class, 'taggable');
    }

    /**
     * Get all of the blogs that are assigned this tag.
     */
    public function blogs(): MorphToMany
    {
        return $this->morphedByMany(Blog::class, 'taggable');
    }

    /**
     * Get related tags based on co-occurrence with this tag.
     *
     * This method finds other tags that appear on the same taggable
     * models (blogs, profiles, etc.) as the current tag. The tags are
     * ranked by how many times they co-occur with this tag, and the
     * top results are returned.
     *
     * @param  int  $limit  The maximum number of related tags to return (default: 10).
     * @return \Illuminate\Support\Collection<int, \App\Models\Tag>  A collection of related Tag models.
     */
    public function relatedTags(int $limit = 10)
    {
        // return Tag::query()
        //     ->select('tags.*')
        //     ->join('taggables as t1', 'tags.id', '=', 't1.tag_id')
        //     ->join('taggables as t2', 't1.taggable_id', '=', 't2.taggable_id')
        //     ->where('t2.tag_id', $this->id) // same model(s) as this tag
        //     ->where('tags.id', '!=', $this->id) // exclude itself
        //     ->where('t1.taggable_type', '=', DB::raw('t2.taggable_type')) // make sure same morph type
        //     ->groupBy('tags.id')
        //     ->selectRaw('COUNT(*) as common_count')
        //     ->orderByDesc('common_count')
        //     ->limit($limit)
        //     ->get();

        $taggableIds = DB::table('taggables')
            ->where('tag_id', $this->id)
            ->where('taggable_type', $this->getMorphClass())
            ->pluck('taggable_id');

        if ($taggableIds->isEmpty()) {
            return collect();
        }

        return Tag::query()
            ->where('tags.id', '!=', $this->id)
            ->whereHasMorph('taggable', [$this->getMorphClass()], function ($query) use ($taggableIds) {
                $query->whereIn('id', $taggableIds);
            })
            ->withCount([
                'taggable as common_count' => function ($query) use ($taggableIds) {
                    $query->whereIn('id', $taggableIds);
                },
            ])
            ->orderByDesc('common_count')
            ->limit($limit)
            ->get();
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
     * Generate a sitemap tag for the tag model.
     *
     * This method returns a Url object that represents
     * the sitemap entry for this tag, including:
     * - The route to the tag's detail page.
     * - The last modification date.
     * - The change frequency (monthly).
     * - The priority (0.1).
     *
     * @return \Spatie\Sitemap\Tags\Url|string|array
     */
    public function toSitemapTag(): Url | string | array
    {

        // Return with fine-grained control:
        return Url::create(route('tags.show', $this))
            ->setLastModificationDate(Carbon::create($this->updated_at))
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            ->setPriority(0.1);
    }
}
