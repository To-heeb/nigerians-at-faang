<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Blog;
use App\Models\Company;
use App\Models\Profile;
use App\Jobs\IncrementViews;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tags.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        IncrementViews::dispatchUsingSession($tag);

        $relatedTags = $tag->relatedTags();
        $tagProfiles =  $tag->profiles()->mostViewed(4)->get();
        $tagCompanies =  $tag->companies()->limit(4)->get();
        $tagBlogs = $tag->blogs()->mostViewed(2)->get();

        return view('tags.show', compact('tag', 'relatedTags', 'tagProfiles', 'tagCompanies', 'tagBlogs'));
    }
}
