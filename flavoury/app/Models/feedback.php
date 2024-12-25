<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class feedback extends Model
{
    use HasFactory;

    // Properti yang bisa diisi secara massal
    protected $fillable = ['id_user', 'feedback', 'date','rating'];

    public $timestamps = true;

    protected $casts = [
        'date' => 'datetime',
    ];
}
