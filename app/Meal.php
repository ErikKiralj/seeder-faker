<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meal extends Model
{
    use Translatable;
    use SoftDeletes;

    public $translatedAttributes = ['title', 'description'];
    protected $fillable = ['status', 'category_id'];
    protected $dates = ['deleted_at'];
    protected $hidden = ['translations','deleted_at', 'created_at', 'updated_at'];

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }

    public function tag()
    {
        return $this->belongsToMany('App\Tag', 'meal_tag')->withPivot('meal_id', 'tag_id');
    }

    public function ingredient()
    {
        return $this->belongsToMany('App\Ingredient', 'meal_ingredient')->withPivot('meal_id', 'ingredient_id');
    }

}
