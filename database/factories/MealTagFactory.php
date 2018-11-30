<?php

use Faker\Generator as Faker;
use App\MealTag;

$factory->define(App\MealTag::class, function (Faker $faker)
{
        $mealtag = new MealTag();
        
        $mealtag->meal_id=App\Meal::inRandomOrder()->first()->id;
        $mealtag->tag_id=App\Tag::inRandomOrder()->first()->id;
        
        $mealtag->save();

        
        return [];
});

