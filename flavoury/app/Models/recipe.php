<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class recipe extends Model
{
    protected $fillable = [
        'name_recipe',
        'descrip_recipe',
        'ingredient',
        'location',
        'flow_cooking',
        'image',
        'id_user',
        'rating'
    ];
}
