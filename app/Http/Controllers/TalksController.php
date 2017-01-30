<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Talk;
use Illuminate\Http\Request;

class TalksController extends Controller
{
    public function index()
    {
        $articles = Talk::latest()->paginate(10);

		return view('talks')->with(compact('articles'));
    }

	public function show($id)
	{

        $article = Talk::find($id);

		return view('talks_show')->with(compact('article'));
	}       
}
