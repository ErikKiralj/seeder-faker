<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Dimsav\Translatable\Translatable;
use App\Meal;
use App;
use DB;

class MealController extends Controller
{
    use Translatable;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function main(Request $request)
    {
        $locale = $request->route('locale'); 
        $tagID = $request->route('tagID'); 
        $categoryID= $request->route('catID');
        //$pp = $request->route('pp');

        //$tagsID = array_map('intval', explode(',', $tagID)); 
         
        $ourLocale = ['langs' => 'en', 'fr', 'hr'];
     
        
        if(in_array($locale, $ourLocale))
        {
            App::setLocale($locale);
        }

        $tags=DB::table('meal_tags')->where('tag_id', $tagID)->pluck('meal_id');
        $tags->toArray();

        $categoryIDs=DB::table('categories')->where('id', $categoryID)->pluck('id');
        $categoryIDs->toArray();
        

        if($tagID !== 0)
        foreach($tags as $tag)
        {
            $meals[]=DB::table('meals')->where('id', $tag)->get();
        }

        return $meals;

    }  
}
