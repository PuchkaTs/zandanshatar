<?php

namespace App\Http\Controllers;

use App\Content;
use App\Http\Requests;
use App\Issue;
use Illuminate\Http\Request;

class IssuesController extends Controller
{
    public function index()
    {
        $issues = Issue::latest()->paginate(10);

		$banner = Content::where('url', 'issues')->first();

		return view('issues')->with(compact('issues', 'banner'));
    }

	public function show($id)
	{

        $article = Issue::find($id);

		return view('issue_show')->with(compact('article'));
	}    
}
