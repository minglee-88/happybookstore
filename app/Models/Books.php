<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    public function Details(){
        return $this->hasOne(Details::class);
    }
    public function Categories(){
        return $this->belongsTo(Categories::class);
    }
}
