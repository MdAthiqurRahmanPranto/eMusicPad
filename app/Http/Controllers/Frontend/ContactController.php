<?php

namespace App\Http\Controllers\frontend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function contactSubmit(Request $request)
    {
        Contact::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message,

        ]);

       return redirect()->back();
    }
}
