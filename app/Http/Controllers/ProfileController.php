<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('profiles.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfileRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        $otherProfiles = Profile::whereNot('id', $profile->id)
            ->where('company_id', $profile->company_id)
            ->limit(5) //TODO(toheeb): look forward to update too  10 if that looks better
            ->get();
        $profile->load(['company', 'blogs']);
        return view('profiles.show', compact('profile', 'otherProfiles'));
    }
}
