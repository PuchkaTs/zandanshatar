<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'as'=>'home_path',
    'uses'=>'HomeController@show'
]);

Route::get('/news', function () {
    return view('news');
});
Route::get('/news', [
    'as'=>'news_path',
    'uses'=>'NewsController@index'
]);
Route::get('/news/{id}', [
    'as'=>'news_show_path',
    'uses'=>'NewsController@show'
]);
Route::get('/posters', [
    'as'=>'posters_path',
    'uses'=>'PostersController@index'
]);
Route::get('/posters/{id}', [
    'as'=>'poster_show_path',
    'uses'=>'PostersController@show'
]);

Route::get('/issues', [
    'as'=>'issues_path',
    'uses'=>'IssuesController@index'
]);

Route::get('/issue/{id}', [
    'as'=>'issue_show_path',
    'uses'=>'IssuesController@show'
]);

Route::get('/talks', [
    'as'=>'talks_index',
    'uses'=>'TalksController@index'
]);

Route::get('/talks/{id}', [
    'as'=>'talks_show_path',
    'uses'=>'TalksController@show'
]);

Route::get('/about', [
    'as'=>'about_path',
    'uses'=>'HomeController@about'
]);

Route::post('/join', [
    'as'=>'about_path',
    'uses'=>'HomeController@store'
]);

Route::get('/books', [
    'as'=>'books_path',
    'uses'=>'BooksController@index'
]);

Route::get('/books/{id}', [
    'as'=>'books_show_path',
    'uses'=>'BooksController@show'
]);

Route::get('/contact', [
    'as'=>'contact_path',
    'uses'=>'ContactController@show'
]);

Route::post('/contact', [
    'as'=>'contact_path',
    'uses'=>'ContactController@store'
]);

Route::get('/ask', [
    'as'=>'ask_path',
    'uses'=>'AskController@show'
]);

Route::post('/ask', [
    'as'=>'ask_path',
    'uses'=>'AskController@store'
]);