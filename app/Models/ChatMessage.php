<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    protected $fillable = [
        'sender_id',
        'receiver_id',
        'message'
    ];

    public function sender() {
            return $this->belongsTo(User::class, 'sender_id');
    }
    public function receiver() {
            return $this->belongsTo(User::class, 'receiver_id');
    }

}
