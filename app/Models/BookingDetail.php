<?php

namespace App\Models;

use App\Models\booking;
use App\Models\Instrument;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookingDetail extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function booking(){
        
        return $this->belongsTo(booking::class, 'booking_id', 'id');
      
    }
    public function instruments(){
        return $this->hasMany(Instrument::class, 'id', 'instrument_id');
    }
}
