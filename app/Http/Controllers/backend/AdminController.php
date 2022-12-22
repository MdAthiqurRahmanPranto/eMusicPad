<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use App\Models\booking;
use App\Models\Padcenter;
use App\Models\Instrument;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function Admin(){
        
        $totalPadcenter=Padcenter::all()->count();
        $totalMusician=User::where('role','user')->get()->count();
        $totalBooking=booking::all()->count();
        $totalInstrument=Instrument::all()->count();


        return view('backend.pages.dashboard',compact('totalPadcenter','totalMusician','totalBooking','totalInstrument'));
    }


  
    
}
