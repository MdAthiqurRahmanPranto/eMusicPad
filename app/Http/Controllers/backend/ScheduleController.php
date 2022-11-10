<?php

namespace App\Http\Controllers\backend;

use App\Models\schedule;
use App\Models\Padcenter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ScheduleController extends Controller
{
    public function list()
    {
        $schedule=schedule::all();
        return view(('backend.pages.schedule.schedule'),compact('schedule'));
    }

    public function create()
    {
        $padcenters = Padcenter::all();
       return view(('backend.pages.schedule.form'),compact('padcenters'));
    }

    public function store (Request $request)
    {
        //dd($request->all());
        schedule::create([
            'date'=> $request->time,
            'slot'=> $request->slot,
            'padcenter_id'=> $request-> padcenter_id,

        ]);
        return redirect()->route('schedule.list');
    }


}
