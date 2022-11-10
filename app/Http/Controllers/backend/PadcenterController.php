<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Padcenter;
use Illuminate\Http\Request;

class PadcenterController extends Controller
{
    public function Padcenter()
    {
     
      $pad_center=Padcenter::paginate(5);
      //dd($pad_center->all());
      return view(('backend.pages.padcenter.padcenter'),compact('pad_center'));
    }
    public function list()
    {
       return view('backend.pages.padcenter.padcenter_form');
    }
 
    public function store(Request $Request)
    {
       //dd($Request->all());
       $Request->validate([

          'name'=> 'required|unique:padcenters,name',
          'image'=> 'required'
       ]);

       $fileName = null;
       if($Request->hasfile('image'))
       {
        //dd($Request->all());
         //generate name
         $fileName=date('Ymdhis').'.'.$Request->file('image')->getClientOriginalExtension();
         $Request->file('image')->storeAs('/uploads',$fileName);
       }
     
       Padcenter::create([
            //database colume name ----input field Name
            'name'=> $Request -> name,
            'phone'=> $Request -> phone,
            'location'=> $Request -> location,
            'image'=>  $fileName
            
         
            
 
       ]);
        return redirect()->route('padcenter');
    }
}
