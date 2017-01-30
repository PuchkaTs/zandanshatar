<?php

namespace App\Http\Controllers;

use App\Article;
use App\Content;
use App\Http\Requests;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(10);

		$banner = Content::where('url', 'news')->first();

		return view('news')->with(compact('articles', 'banner'));
    }

	public function show($id)
	{

        $article = Article::find($id);

		return view('news_show')->with(compact('article'));
	}    
}
