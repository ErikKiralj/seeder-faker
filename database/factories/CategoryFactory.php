<?php

use Faker\Generator as Faker;
use App\Category;

$factory->define(App\Category::class, function (Faker $faker) 
{
        $category = new Category();
        $category->slug = $faker->numberBetween($min = 1, $max = 10);

        foreach (['en', 'fr', 'hr'] as $locale) 
        {
            $category->translateOrNew($locale)->title = "Title {$locale}";
        }

        $category->save();

        return [];
});
