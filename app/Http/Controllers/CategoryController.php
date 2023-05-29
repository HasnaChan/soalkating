<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($id){ //passing paramter yg disini harus sama ky yg di controller
        $category = Category::find($id);
        $books = $category->Book()->paginate(5);
        // $categories = Category::all();
        // $flag = true;

        return view("category", compact("books", "category"));
    }
}
