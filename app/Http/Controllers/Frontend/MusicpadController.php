<?php

namespace App\Http\Controllers\frontend;

use App\Models\Padcenter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MusicpadController extends Controller
{
    public function musicpad ()
    {
       $musicpad=Padcenter::all();
        return view(('frontend.pages.musicpad'),compact('musicpad'));
    }
}
