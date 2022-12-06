<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Padcenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
            'description' => $Request->description,
            'image'=>  $fileName,
            'price'=>$Request->price
            
       ]);
        return redirect()->route('padcenter');
    }
    
    public function delectPadcenter(int $padcenter_id)
    {
     
      
      Padcenter::find($padcenter_id)->delete();
       return redirect()->back();
    } 

    public function viewPadcenter($padcenter_id)
    {
      
      $padcenter=Padcenter::find($padcenter_id);
      return view('backend.pages.padcenter.view',compact('padcenter'));
    }
    public function editPadcenter($padcenter_id)
    {

      $padcenter=padcenter::find($padcenter_id);
      return view('backend.pages.padcenter.edit',compact('padcenter'));
    }
    public function updatePadcenter(Request $Request,$padcenter_id)
    {


        $padcenter=padcenter::find($padcenter_id);
        $fileName=$padcenter->image;

        if($Request->hasFile('image'))
        {
            // generate name
            $fileName=date('Ymdhmi').'.'.$Request->file('image')->getClientOriginalExtension();
            $Request->file('image')->storeAs('/uploads',$fileName);
        }
        if (File::exists(public_path('uploads/20221110084654.png'))) {
          File::delete(public_path('uploads/20221110084654.png'));
      }

        $padcenter->update([
            'name' => $Request->name,
            'phone' => $Request->phone,
            'location' => $Request->location,
            'description' => $Request->description,
            'image' => $fileName,
            'price'=>$request->price
            
        ]);

        return redirect()->route('padcenter')->with('message','Update successful.');

    }
    public function search(Request $request){
      
      $search = Padcenter::where('name','LIKE',"%$request->search%")->get();
      return view('backend.pages.search.search',compact('search'));
    }
    
}
