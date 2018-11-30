<?php

use Faker\Generator as Faker;
use App\Meal;

$factory->define(App\Meal::class, function (Faker $faker) 
{
        $meal = new Meal();
        $meal->category_id = $faker->optional()->numberBetween($min = 1, $max = 10);

        foreach (['en', 'fr', 'hr'] as $locale) 
        {
            $meal->translateOrNew($locale)->title = "Title {$locale}";
            $meal->translateOrNew($locale)->description = "Description {$locale}";
        }

        $meal->save();

        return [];
});
