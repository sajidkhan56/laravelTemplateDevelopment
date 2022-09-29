<?php

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

//index page route
Route::get('/', function () {
    return view('index');
});
//end index page route

//home page route start
Route::get('/home/page', function () {
    return view('index');
});
//home page route end

//about page route start
Route::get('/about/page', function () {
    return view('pages.about');
});
//about page route end

//glasses page route start
Route::get('glasses/page', function () {
    return view('pages.glasses');
});
//glasses page route end

//shop page route start
Route::get('shop/page', function () {
    return view('pages.shop');
});
//shop page route end

//contact page route start
Route::get('contact/page', function () {
    return view('pages.contact');
});
//contact page route end