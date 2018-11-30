<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Meal::class, 10)->create();
        factory(App\Category::class, 10)->create();
        factory(App\Ingredient::class, 10)->create();
        factory(App\Tag::class, 10)->create();
        factory(\App\MealTag::class, 10)->create();
        factory(\App\MealIngredient::class, 10)->create();
        
        $count = DB::table('tags')->count();
        for($i=1; $i<=$count; $i++)
        {
            DB::table('tags')->where('id', $i)->update(['slug' => 'tag-'. $i]);
        }

        $count = DB::table('categories')->count();
        for($i=1; $i<=$count; $i++)
        {
            DB::table('categories')->where('id', $i)->update(['slug' => 'category-'. $i]);
        }

        $count = DB::table('ingredients')->count();
        for($i=1; $i<=$count; $i++)
        {
            DB::table('ingredients')->where('id', $i)->update(['slug' => 'ingredient-'. $i]);
        }
    }
}