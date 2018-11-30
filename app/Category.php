<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Dimsav\Translatable\Translatable;

class Category extends Model
{
    use Translatable;

    public $translatedAttributes = ['title'];
    protected $fillable = ['slug'];
   
    public function meal()
    {
        return $this->hasMany('App\Meal');
    }
}
