<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Profile;

class WelcomeController
{
    public function __invoke()
    {
        // 4 random profiles, published
        $profiles = Profile::published()->latestWithCompany()->get();

        // 3 random blogs, published
        $blogs = Blog::latest()->take(4)->get();

        return view('welcome', compact('profiles', 'blogs'));
    }
}
