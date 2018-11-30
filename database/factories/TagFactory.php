<?php

use Faker\Generator as Faker;
use App\Tag;

$factory->define(App\Tag::class, function (Faker $faker) 
{
    $tag = new Tag();
    $tag->slug = $faker->numberBetween($min = 1, $max = 10);

    foreach (['en', 'fr', 'hr'] as $locale) 
    {
        $tag->translateOrNew($locale)->title = "Title {$locale}";
    }

    $tag->save();

    return [];
});
