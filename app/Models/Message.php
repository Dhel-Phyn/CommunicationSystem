<?php

namespace App;
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['username', 'senderId', 'text', 'phone', 'email', 'recipientId', 'created_by'];
    
    // Define any relationships or additional functions here

    public function receiver(){
        return $this->belongsTo(User::class, "recipientId");
    }
}
