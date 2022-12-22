<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Slot;
use App\Models\User;
use App\Models\booking;
use App\Models\Padcenter;
use App\Models\Instrument;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function booking($padcenter_id)
    {
        $padcenter=Padcenter::find($padcenter_id);
        $inst=Instrument::where('padcenter_id',$padcenter->id)->get();
        $user=User::all();
        $slots = Slot::where('padcenter_id',$padcenter->id)->get();
        return view('frontend.pages.booking',compact('padcenter','user','slots','inst'));
    }
    public function ProcessBooking(Request $request,$padcenter_id)
    {
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email|unique:bookings,email',
            'phone'=> 'required|numeric',
            'schedhule'=> 'required|unique:bookings,schedhule',
            'date'=> 'required|unique:bookings,date',
            
        ]);

        
        
        $padcenter = padcenter::find($padcenter_id);
   

        $data= [
            // 'padcenter_name'=>,
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            "user_id"=>auth()->user()->id,
            "user_email"=>auth()->user()->email,
            'band'=>$request->bandname,
            'date'=>$request->date,
            'padcenter'=>$padcenter->name,
            'schedhule'=>$request->schedhule,
            'instrument'=>$request->instrument,
            'payment'=>$request->payment,
          
        ];
    
   
        booking::create($data);    
        $this->setSuccessMessage('Booking Successful');
        return redirect()->back();
    }
   
}
