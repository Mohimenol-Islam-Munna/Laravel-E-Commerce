<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Category;

class CategoryController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function category(){

    	$categories = Category::all();

    	return view('pages.back-end.category', compact('categories'));

    }



    public function subCategory(){

    	return response()->json('its also working');

    }

    public function brand(){

    	return response()->json('its also working as brand');

    }
}
