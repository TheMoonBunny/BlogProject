<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
        return view('home');
    }
    public function about(){
        return view('pages/about');
    }
    public function howto()
    {
    return view('pages/howto');
    }
    public function contact(){
        return view('pages/contact');
    }
    //entries
    public function bbcode(){
    return view ('pages/entries/bbcode');
    }
    public function githubgitbash(){
        return view('pages/entries/githubgitbash');
    }
    public function databasetut(){
        return view('pages/entries/databasetut');
    }
    public function databasetut2(){
        return view('pages/entries/databasetut2');
    }
    
}
