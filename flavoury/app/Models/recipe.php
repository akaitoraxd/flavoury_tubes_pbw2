<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class recipe extends Model
{
    // Menggunakan nama primary key jika tidak menggunakan 'id'
    protected $primaryKey = 'id_recipe';

    // Kolom yang dapat diisi mass-assignable
    protected $fillable = [
        'name_recipe',
        'descrip_recipe',
        'ingredient',
        'location',
        'flow_cooking',
        'image',
        'id_user',
        'rating',
    ];

    // Relasi dengan tabel comments (One to Many)
    public function comments()
    {
        return $this->hasMany(Comment::class, 'id_recipe');
    }
}
