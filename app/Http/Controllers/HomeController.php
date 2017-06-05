<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use App\Role;
use App\Content;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\CreateJoinRequest;

class HomeController extends Controller
{

    public function show()
    {

        $article = Article::where('ontslog','=', '1')->first();

        return view('welcome')->with(compact('article'));
    }    

    public function about(){

        $banner = Content::where('url', 'about')->first();


        return view('about')->with(compact('banner'));

    }

    public function store(CreateJoinRequest $request){


        $role = Role::where('name', 'member')->first();
        
        $user = User::create($request->all());

        $user = $role->users()->save($user);

        flash()->success('Таны хүсэлтийг хүлээн авлаа.', 'Баярлалаа');

        return redirect()->back();

    }   
}