<?php

namespace App\Models;


use App\Models\Padcenter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slot extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function padcenter()
    {
        return $this->belongsTo(Padcenter::class,);
    }
}
