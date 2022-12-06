<?php

namespace App\Http\Controllers\backend;
use App\Models\Slot;
use App\Models\Padcenter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SlotController extends Controller
{
    public function list()
    {
        
        $slot=Slot::all();
        return view("backend.pages.slot.list",compact('slot'));
    }
    
    public function create()
    {
        $padcenter=Padcenter::all();
        return view('backend.pages.slot.create',compact('padcenter'));
    }
    public function store(Request $request)
    {
     
        Slot::create([
            
            'startingTime'=>$request->startTime,
            'endingTime'=>$request->endTime,
            'padcenter_id'=>$request->padcenter_id
        ]);
       return redirect()->route('slot.list');
    }
}
