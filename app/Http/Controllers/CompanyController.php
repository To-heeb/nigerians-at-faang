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
        $companies = Company::all();

        return view('companies.index', compact('companies'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {

        $relatedCompanies = Company::whereNot('id', $company->id)->limit(10)->get(); // TODO(toheeb): use company that are in the industry ->where('industry', $company->industry)[this will now be complex many to many with most closest]
        $companyProfiles = Profile::where('company_id', $company->id)->mostViewed(4)->get();
        $companyBlogs = Blog::mostViewed(2)->get();  // TODO(toheeb): use company as the it's tag is related to the blog withTags([$company->name])

        return view(
            'companies.show',
            compact('company', 'relatedCompanies', 'companyProfiles', 'companyBlogs')
        );
    }
}
