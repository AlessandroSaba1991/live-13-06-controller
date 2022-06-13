<?php

namespace App\Http\Controllers;
use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::all();
        return view('books.index',compact('books'));
    }

    public function show(Book $book)
    {
        //$book = Book::find($id);
        //dd($book);
        return view('books.show',compact('book'));

    }

}
