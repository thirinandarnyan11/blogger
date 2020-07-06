<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\category;

class CategoryController extends Controller
{
      public function index()
    {
        $categories=Category::all();
        return view('frontend.createpost',compact('categories'));
    }

}
