<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merch extends Model
{
    protected $table = 'merch';

    protected $fillable = [
        'title',
        'image',
        'price',
        'quantity',
        'description',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'quantity' => 'integer',
    ];
}
