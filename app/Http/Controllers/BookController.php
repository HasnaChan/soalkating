<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::paginate(5);
        // dd($books);
        // $flag = false;
        return view('/home', compact('books'));
    }

    public function show($id){
        $books = Book::find($id);

        return view('/detail', compact("books"));

    }
}
