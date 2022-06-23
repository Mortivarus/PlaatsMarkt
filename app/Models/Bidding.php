<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidding extends Model
{
    use HasFactory;

    public function adverts(){
        return $this->belongsTo(Advert::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }

}
