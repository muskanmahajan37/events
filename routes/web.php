<?php

use App\Mail\EventCreated;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/emailtest', function () {
    Mail::to("abc@gmail.com")->send(new EventCreated());
    return new EventCreated();
});

Auth::routes();

Route::get('/dashboard', 'EventController@index')->name('home');

Route::get("/events","EventController@index");
Route::post("/events","EventController@store");
Route::get("/events/create","EventController@create");
Route::get("/events/{event}/edit","EventController@edit");
Route::put("/events/{event}","EventController@update");
Route::get("/events/{event}","EventController@show");
Route::delete("/events/{event}","EventController@destroy");

