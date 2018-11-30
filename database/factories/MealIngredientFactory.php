<?php

use Faker\Generator as Faker;
use App\MealIngredient;

$factory->define(App\MealIngredient::class, function (Faker $faker)
{
        $mealingredient = new MealIngredient(); 

        $mealingredient->meal_id=App\Meal::inRandomOrder()->first()->id;
        $mealingredient->ingredient_id=App\Ingredient::inRandomOrder()->first()->id;


        $mealingredient->save();
        
        return [];
       
});
