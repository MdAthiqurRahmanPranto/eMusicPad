<?php

namespace App\Http\Controllers\backend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function list()
    {
       
        $Contact=Contact::all();
        return view('backend.pages.contact',compact('Contact'));   
    }
    
}
