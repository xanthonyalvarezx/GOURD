<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $table = 'events';

    public $timestamps = false;

    protected $fillable = [
        'title',
        'image',
        'date',
        'time',
        'location',
        'description',
        'ticket_link',
    ];

    protected $casts = [
        'date' => 'date',
    ];
}
