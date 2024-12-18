<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class comment extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak mengikuti konvensi plural
    protected $table = 'comments'; // Nama tabel bisa diubah jika menggunakan nama yang tidak sesuai konvensi

    // Tentukan primary key jika menggunakan selain 'id'
    protected $primaryKey = 'id_comment';

    // Kolom yang dapat diisi
    protected $fillable = [
        'id_recipe', 
        'id_user', 
        'comment', 
        'rating',
    ];

    // Relasi ke model Recipe
    public function recipe()
    {
        return $this->belongsTo(Recipe::class, 'id_recipe');
    }

    // Relasi ke model User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
