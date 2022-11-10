<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
   protected $guarded=[];
   
   public function padcenter()
   {
    return $this->belongsTo(padcenter::class);
   }
}
