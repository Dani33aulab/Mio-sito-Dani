<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{


    
    public function __construct(){

        $this->middleware('auth')->except('homepage');
    }

    public function careers(){

        return view('careers');
    }


    public function homepage(){

        $articles = Article::orderby('created_at', 'desc')->take(4)->get();

        return view('welcome', compact('articles'));
    }


    public function careersSubmit(Request $request){

        $request->validate([

            'role' => 'requierd',
            'email'=> 'requiered|email',
            'message'=> 'requiered',
        ]);
    }
}
