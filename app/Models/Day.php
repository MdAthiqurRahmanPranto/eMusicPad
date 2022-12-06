<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Day extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function Slot()
    {
        return $this->hasMany(Day::class);
    }

   
}
