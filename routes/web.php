<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();


Route::group(['middleware' => 'auth'],function(){

    Route::get('/memo', 'MemoController@index');
    Route::post('/memo/create','MemoController@create');
    Route::get('/memo/create',function() {return view('Memo.createMemo');});
    Route::get('/memo/{id}','MemoController@show');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/help',function() {return view('Memo.help');});

});




Route::get('/login/twitter', 'Auth\TwitterController@redirectToProvider')->name("twitter.login");
Route::get('/login/twitter/callback', 'Auth\TwitterController@handleProviderCallback'); 

Route::delete('memo/{id}','MemoController@delete');