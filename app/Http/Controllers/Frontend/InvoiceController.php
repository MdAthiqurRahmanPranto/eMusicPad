<?php

namespace App\Http\Controllers\frontend;

use App\Models\booking;
use App\Models\Padcenter;
use App\Models\Instrument;
use Illuminate\Http\Request;
use App\Models\BookingDetail;
use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    public function invoice($id)
    {
     
        $invoice=booking::where('id',$id)->with('padcenterRelation')->first();
        // dd($invoice);
       
        $bookingdetails=BookingDetail::where('booking_id',$invoice->id)->with('instruments')->get();
        
        
        
        return view('frontend.pages.Invoice.invoice',compact('invoice','bookingdetails'));
    }
}
