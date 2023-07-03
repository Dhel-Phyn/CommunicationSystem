<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['username', 'senderId', 'text', 'phone', 'email', 'recipientId', 'created_by'];
    
    // Define any relationships or additional functions here
}
