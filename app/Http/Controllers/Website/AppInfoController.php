<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\AppInfo;
use Illuminate\Http\Request;

class AppInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function about()
    {
        //
        return view('website.about');
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
    public function show(AppInfo $appInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AppInfo $appInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AppInfo $appInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AppInfo $appInfo)
    {
        //
    }
}
