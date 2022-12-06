<?php

namespace App\Http\Controllers\backend;

use App\Models\Day;
use App\Models\Slot;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DayController extends Controller
{
    public function list()
    {
        $days=Day::all();
        return view('backend.pages.days.list',compact('days'));

    }
    public function create()
    {
       $slots=Slot::all();
        return view('backend.pages.days.create',compact('slots'));
    }
    public function store(Request $request)
    {
        
        Day::create([
            'days'=>$request->days,
            'slots_id'=>$request->slots_id
        ]);
         return redirect()->route('day.list');

    }
}
