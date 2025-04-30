<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Profile;

class WelcomeController
{
    public function __invoke()
    {
        // 4 random profiles
        $profiles = Profile::with('company')->get();

        // 3 random blogs
        $blogs = Blog::all();

        return view('welcome', compact('profiles', 'blogs'));
    }
}
