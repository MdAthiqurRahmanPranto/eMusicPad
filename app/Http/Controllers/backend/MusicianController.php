<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Musician;
use Illuminate\Http\Request;

class MusicianController extends Controller
{
    public function musicians()
    {
        return view("backend.pages.musician.musicians");
    }

    public function form()
    {
        return view("backend.pages.musician.form");
    }

    
}
