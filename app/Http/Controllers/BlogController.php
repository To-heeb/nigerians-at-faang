<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Jobs\IncrementViews;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('blogs.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        IncrementViews::dispatchUsingSession($blog);

        $blog->load(['tags', 'profile']);
        $recentBlogs = Blog::published()->latestWithProfile(5)->get();

        return view('blogs.show', compact('blog', 'recentBlogs'));
    }
}
