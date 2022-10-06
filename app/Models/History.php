<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function product(){
        return $this->belongsTo(Products::class,'product_id','id');
    }

    public function from(){
        return $this->belongsTo(Objects::class,'from','id');
    }

    public function to(){
        return $this->belongsTo(Objects::class,'to','id');
    }

}
