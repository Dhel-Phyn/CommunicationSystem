<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $table ='message'; 
    
    protected $fillable =[
        'chatId',
        'senderId',
        'recipientId',
        'text',
        'username',
        'phone', 
        'email',
        'created_by'
    ];
}
