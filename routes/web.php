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

/*Main page*/
Route::get('/', 'PAGESCONTROLLER@Home');
Route::get('/about', 'PAGESCONTROLLER@about');
Route::get('/howto', 'PAGESCONTROLLER@howto');
Route::get('/contact', 'PAGESCONTROLLER@contact');
//Route::feeds('/voorbeeld', 'PAGESCONTROLLER@voorbeeld');
//entries pages downbelow
Route::get('/bbcode', 'PAGESCONTROLLER@bbcode');
Route::get('/githubgitbash', 'PAGESCONTROLLER@githubgitbash');
