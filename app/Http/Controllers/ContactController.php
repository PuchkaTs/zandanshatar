<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\CreateAskRequest;

use App\Ask;

class ContactController extends Controller
{
    public function show(){

		return view('contact');

    }

	public function store(CreateAskRequest $request){
		
		$Ask = Ask::create($request->all());

        flash()->success('Таны асуултыг хүлээн авлаа.', 'Баярлалаа');

		return redirect()->back();

	}
}
