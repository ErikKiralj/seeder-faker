<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Dimsav\Translatable\Translatable;

class Tag extends Model
{
    use Translatable;

    public $translatedAttributes = ['title'];
    protected $fillable = ['slug'];
    
    public function meal()
    {
        return $this->belongsToMany('App\Meal', 'meal_tag')->withPivot('meal_id' , 'tag_id');
    }
}
