<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

protected $fillable = [
    'content',
    'sender_id',
    'recipient_id'
];
    use HasFactory;

    public function sender(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function recipient(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
