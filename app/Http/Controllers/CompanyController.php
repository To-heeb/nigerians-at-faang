<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Profile;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Blog;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('companies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {

        $relatedCompanies = $company->relatedCompanies();
        $companyProfiles = Profile::where('company_id', $company->id)->mostViewed(4)->get();
        $companyBlogs = Blog::query()
            ->whereHas('tags', function ($q) use ($company) {
                $q->where('slug', $company->slug);
            })
            ->mostViewed(3)
            ->get();

        return view(
            'companies.show',
            compact('company', 'relatedCompanies', 'companyProfiles', 'companyBlogs')
        );
    }
}
