<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Content;

use App\Http\Requests;

class AskController extends Controller
{
    public function show(){

		$banner = Content::where('url', 'ask')->first();

		return view('ask')->with(compact('banner'));

    }

	public function store(CreateAskRequest $request){
		
		$Ask = Ask::create($request->all());

        flash()->success('Таны асуултыг хүлээн авлаа.', 'Баярлалаа');

		return redirect()->back();

	}
}
