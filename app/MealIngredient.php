<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Dimsav\Translatable\Translatable;

class MealIngredient extends Model
{
    protected $fillable = ['meal_id', 'ingredient_id'];
}
