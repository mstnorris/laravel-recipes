<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image_path',
        'is_vegetarian',
        'is_vegan'
    ];
}
