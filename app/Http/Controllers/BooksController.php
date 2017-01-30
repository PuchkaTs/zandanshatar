<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Response;

use App\Http\Requests;

use App\Book;

class BooksController extends Controller
{
    public function index()
    {
        $articles = Book::latest()->paginate(10);

		return view('books')->with(compact('articles'));
    }

	public function show($id)
	{
        $article = Book::find($id);

		$path = storage_path($article->file);

		$pathToFile = public_path() . '/assets/books/' . $article->file;

		return response()->file($pathToFile);

	}    
}
