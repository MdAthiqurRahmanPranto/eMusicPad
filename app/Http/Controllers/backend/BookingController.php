<?php

namespace App\Http\Controllers\backend;

use App\Models\booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function list()
    {
        $booking=booking::all();
        return view('backend.pages.booking.list',compact('booking'));
    }

    public function statusYes($booking_id)
    {
        
        $booking=booking::find($booking_id);

        $booking->update([
            'status'=>'Approved'
        ]);
         return redirect()->back();
    }
    public function statusNo($booking_id)
    {
        $booking=booking::find($booking_id);

        $booking->update([
            'status'=>'cancel'
        ]);
        return redirect()->back();
    }
}
