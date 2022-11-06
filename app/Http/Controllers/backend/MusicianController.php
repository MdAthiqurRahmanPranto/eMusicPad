<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Musician;
use Illuminate\Http\Request;

class MusicianController extends Controller
{
    public function musicians()
    {
        $musician_list=musician::all();
        //dd($musician_list);
        return view(("backend.pages.musician.musicians"),compact('musician_list'));
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
    
    
}
