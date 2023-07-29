<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        return view('website.contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $contact = ContactUs::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'company' => $request->company,
            'country' => $request->country,
            'city' => $request->city,
            'address' => $request->address,
            'telephone' => $request->telephone,
            'fax' => $request->fax,
            'email' => $request->email,
            'message' => $request->message,
        ]);
        if($contact){
            $message = 'تم ارسال رسالتك بنجاح';
        }

        return redirect()->back()->with('message', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactUs $contactUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactUs $contactUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactUs $contactUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactUs $contactUs)
    {
        //
    }
}
