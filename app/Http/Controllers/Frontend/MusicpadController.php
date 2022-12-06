<?php

namespace App\Http\Controllers\frontend;

use App\Models\Padcenter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MusicpadController extends Controller
{
    public function musicpad ()
    {
       $musicpad=Padcenter::take(4)->get();
        return view(('frontend.pages.musicpad.musicpad'),compact('musicpad'));
    }

    public function musicpadList()
    {
        $musicpad=Padcenter::all();
        return view('frontend.pages.musicpad.list',compact('musicpad'));
    }

    public function singleView($padcenter_id)
    {
        
        $musicpad=Padcenter::find($padcenter_id);
        return view('frontend.pages.musicpad.singleView',compact('musicpad'));
    }
}
