<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Dimsav\Translatable\Translatable;

class MealTag extends Model
{
    protected $fillable = ['meal_id', 'tag_id'];

}
