<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Advert extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'amount',
        'user_id'
    ];

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function seller(){
        return $this->hasMany(User::class, 'user_id');
    }
}
