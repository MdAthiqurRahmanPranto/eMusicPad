<?php

namespace App\Models;

use App\Models\Padcenter;
use App\Models\BookingDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class booking extends Model
{
   protected $guarded = [];
   /**
    * Get all of the comments for the booking
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function booking(): HasMany
   {
       return $this->hasMany(BookingDetail::class, 'booking_id', 'id');
   }
       public function padcenterRelation()
    {
        return $this->hasMany(Padcenter::class,'id', 'padcenter_id');
    }
 
}
