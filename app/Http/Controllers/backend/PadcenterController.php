<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PadcenterController extends Controller
{
   public function Padcenter()
   {
    return view('backend.pages.padcenter');
   }
}
