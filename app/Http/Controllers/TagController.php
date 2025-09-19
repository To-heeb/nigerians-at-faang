<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Blog;
use App\Models\Company;
use App\Models\Profile;
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
        // TODO(toheeb): Fix this
        $relatedTags = Tag::whereNot('id', $tag->id)->limit(10)->get(); // TODO(toheeb): use company that are in the industry ->where('industry', $company->industry)[this will now be complex many to many with most closest]
        $tagProfiles = Profile::where('company_id', $tag->id)->get();
        $tagCompanies = Company::where('company_id', $tag->id)->mostViewed(4)->get();
        $tagBlogs = Blog::mostViewed(2)->get();  // TODO(toheeb): use company as the it's tag is related to the blog withTags([$company->name])

        return view('tags.show', compact('tag', 'relatedTags'));
    }
}
