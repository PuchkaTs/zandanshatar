<?php

namespace App\Http\Controllers;

use App\Content;
use App\Http\Requests;
use App\Poster;
use Illuminate\Http\Request;

class PostersController extends Controller
{
    public function index()
    {
        $posters = Poster::latest()->limit(10)->get();

        $twoPosters = Poster::latest()->limit(2)->get();

		$banner = Content::where('url', 'posters')->first();

		return view('posters')->with(compact('posters', 'twoPosters', 'banner'));
    }

    public function show($id)
    {
        $poster = Poster::find($id);

		$banner = Content::where('url', 'posters')->first();

        $posters = Poster::latest()->limit(10)->get();

		return view('poster_show')->with(compact('poster', 'banner', 'posters'));
    }
 
}
