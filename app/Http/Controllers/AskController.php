<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AskController extends Controller
{
    public function show(){

		return view('ask');

    }

	public function store(CreateAskRequest $request){
		
		$Ask = Ask::create($request->all());

        flash()->success('Таны асуултыг хүлээн авлаа.', 'Баярлалаа');

		return redirect()->back();

	}
}
