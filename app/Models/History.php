<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = 'messages';

    protected $fillable = [
        'from',
        'to',
        'content',
    ];

    // Relationships can be defined here

    // Example of a relationship with a User model
    public function sender()
    {
        return $this->belongsTo(User::class, 'from');
    }

    public function recipient()
    {
        return $this->belongsTo(User::class, 'to');
    }
}
