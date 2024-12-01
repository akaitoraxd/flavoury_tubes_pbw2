<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class collection extends Model
{
    use HasFactory;

    // Menambahkan properti fillable
    protected $fillable = [
        'id_recipe',   // Pastikan id_recipe ada di sini
        'id_user',
    ];
}
