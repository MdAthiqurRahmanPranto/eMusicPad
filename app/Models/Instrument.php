<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Padcenter;

class Instrument extends Model
{
    protected $guarded=[];

    public function padcenter(){
       return $this->belongsTo(Padcenter::class);
    }
}
