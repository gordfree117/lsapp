<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome!';
        //return view('pages.index'); // normal way, no parameters
        //return view('pages.index', compact('title')); //pass one parameter
         return view('pages.index')->with('title', $title); //pass multiple parameters
    }

    public function about(){
        $title ='About';
        //return view('pages.about');
        return view('pages.about', compact('title'));
    }

    public function services(){
        $title ='Services';
        //return view('pages.services');
        return view('pages.services', compact('title'));
    }
}
