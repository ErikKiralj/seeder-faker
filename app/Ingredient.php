<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Dimsav\Translatable\Translatable;

class Ingredient extends Model
{
    use Translatable;

    public $translatedAttributes = ['title'];
    protected $fillable = ['slug'];
 
    public function meal()
    {
        return $this->belongsToMany('App\Meal', 'meal_ingredient')->withPivot('meal_id', 'ingredient_id');
    }
}
