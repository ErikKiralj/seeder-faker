<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Dimsav\Translatable\Translatable;

class CategoryTranslation extends Model
{
    protected $fillable = ['title'];
}
