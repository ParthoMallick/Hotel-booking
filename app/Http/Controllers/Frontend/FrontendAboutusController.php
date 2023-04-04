<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CompanyMission;
use App\Models\Feedback;
use App\Models\Services;
use Illuminate\Http\Request;

class FrontendAboutusController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function about_us()
    {
        $aboutUs =getSettingsData('aboutUs');
        $companyMission=CompanyMission::all();
        $services =Services::all();
        $feedback=Feedback::all();
        return view('frontend.about_us',compact('aboutUs','companyMission','services','feedback'));
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
