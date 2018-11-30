<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Dimsav\Translatable\Translatable;

class MealTranslation extends Model
{
    protected $fillable = ['title', 'description'];
}
