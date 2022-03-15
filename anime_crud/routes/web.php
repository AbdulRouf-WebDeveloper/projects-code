<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

 Route::get('/', function(){
    return view('home');
 });

Route::get('/anime_characters', 'CharacterController@index');

Route::get('/anime_characters/{id}', 'CharacterController@show');

// admin security check

Route::group(['middleware' => ['admin']],function(){

    // admin home
     Route::get('/admin',function(){
         return view('admin');
     });
    // Admin pages
        Route::get('/admin/characters/create','Admin\CharactersController@create');

        Route::post('/admin/characters','Admin\CharactersController@store');

        Route::get('/admin/characters','Admin\CharactersController@index');

        Route::delete('/admin/characters/{id}',"Admin\CharactersController@destroy");

        Route::get('/admin/characters/edit/{id}','Admin\CharactersController@edit');

        Route::put('/admin/characters/edit/{id}','Admin\CharactersController@update');

        // seach for charactrs in admin
        Route::post('/admin/characters/search','Admin\CharactersController@search');

});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
