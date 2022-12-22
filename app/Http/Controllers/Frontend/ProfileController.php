<?php

namespace App\Http\Controllers\frontend;

use App\Models\User;
use App\Models\booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function showProfile()
    {
        $booking=booking::where("user_email",auth()->user()->email)->with('padcenterRelation')->get();
        $musician=User::find(auth()->user()->id);
        return view('frontend.pages.Profile.Musician',compact('musician','booking'));
    }

    public function editProfile($id)
    {
        $musician=User::find($id);
        return view('frontend.pages.Profile.edit',compact('musician'));
    }
    public function updateProfile(Request $request,$id)
    {
        
        $musicians=User::find($id);
        
        $musicians->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'band'=>$request->band,
        ]);
        return redirect()->route('Profile')->with('message','update successful');
    }
}
