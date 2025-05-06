<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Company;

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
        // TODO(toheeb): pass the profiles related to this company

        return view('companies.show', compact('company'));
    }
}
