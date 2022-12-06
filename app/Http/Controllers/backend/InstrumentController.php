<?php

namespace App\Http\Controllers\backend;

use App\Models\Padcenter;
use App\Models\Instrument;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InstrumentController extends Controller
{
    public function instrument()
    {
        $inst=Instrument::all();
        return view (('backend.pages.instrument.instrument'),compact('inst'));
    }

public function list()
{
    $padcenters = Padcenter::all();
    
    return view('backend.pages.instrument.form',compact('padcenters'));
}

public function store(Request $request)
{

    // dd($request->all());

    $request->validate([
        'name'=> 'required|unique:instruments,name',
    ]);
    // dd($request->all());
    Instrument::create([
            'name'=> $request-> name,
            'price'=>$request->price,
            'padcenter_id'=> $request-> padcenter_id,
    ]);
    return redirect()->route('instrument');
}
    
}
