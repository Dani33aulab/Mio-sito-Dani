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
       
       
        $user = Auth::user();
        $role = $request->role;
        $email = $request->email;
        $message = $request->message;
    
        Mail::to('admin@theaulabpost.it')->send(new CareerRequestMail(compact('role','email','message')));
    
        switch ($role) {
    
            case 'admin':
                $user->is_admin = NULL;
                break;
    
            case 'revisor':
                $user->is_revisor = NULL;
                break;
    
            case 'writer':
                  $user->is_writer = NULL;
                  break;
    }

             $user->update();

             return redirect(route('homepage'))->with('message', 'Grazie per averci contattato!');
             
    }

          

}
