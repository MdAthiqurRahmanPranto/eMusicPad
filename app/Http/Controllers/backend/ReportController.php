<?php

namespace App\Http\Controllers\backend;


use App\Models\booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ReportController extends Controller
{
   public function list(Request $request)
   {
      
      if($request->from && $request->to){
         $report = booking::whereBetween('date',[$request->from,$request->to])->get();

         $request->validate([
            'from'=> 'required | before_or_equal:today',
            'to'=> 'required | after_or_equal:today',
            
         ]);
      
         // dd('invalid');
         return view('backend.pages.report',compact('report'));
      }else{
         $report = booking::get();
         return view('backend.pages.report',compact('report'));
      }
   }
   
}
