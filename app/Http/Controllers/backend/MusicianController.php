<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use App\Models\Musician;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MusicianController extends Controller
{
    public function musicians()
    {
        // $user=User::all();  
        $user = User::where('role','user')->get();
        return view(("backend.pages.musician.musicians"),compact('user'));
    }

    public function form()
    {
        return view("backend.pages.musician.form");
    }

    public function store(Request  $request)
    {
        //dd($request->all());
        musician::create([
            'name'=> $request-> name,
            'address'=> $request-> address,
            'phone'=> $request-> phone,
            'band'=> $request-> band,
        ]);
        return redirect()->route("musicians");
    }

    public function deleteMusician($id)
    {
        User::find($id)->delete();
         return redirect()->back();
    }
    
    
}
