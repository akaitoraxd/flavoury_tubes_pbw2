<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class market extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'description',
        'price',
        'sold_amount',
        'image',
    ];
}
