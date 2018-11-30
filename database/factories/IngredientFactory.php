<?php

use Faker\Generator as Faker;
use App\Ingredient;

$factory->define(App\Ingredient::class, function (Faker $faker) 
{    
    $ingredient = new Ingredient();
        $ingredient->slug = $faker->numberBetween($min = 1, $max = 10);

        foreach (['en', 'fr', 'hr'] as $locale) 
        {
            $ingredient->translateOrNew($locale)->title = "Title {$locale}";
        }

        $ingredient->save();

        return [];
});
