<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Tag extends Model
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
    ];

    /**
     * Automatically convert the name to slug before saving.
     */
    public function setNameAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }

    /**
     * Get the parent taggable model (profile or blog).
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
     * Get all of the blogs that are assigned this tag.
     */
    public function blogs(): MorphToMany
    {
        return $this->morphedByMany(Blog::class, 'taggable');
    }
}
