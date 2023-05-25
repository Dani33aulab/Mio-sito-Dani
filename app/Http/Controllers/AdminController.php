<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboards(){

        $adminRequest = User::where('is_admin', NULL)->get();
        $revisorRequests = User::where('is_revisor', NULL)->get();
        $writerRequests = User::where('is-writer', NULL)->get();

        return view('admin.dashboards', compact('adminRequests', 'revisorRequests', 'writerRequests'));
    }

    public function setAdmin($user){
        $user->update([

            'is_admin' -> true,
        ]);

        return redirect(route('admin.dashboard'))->with('message', 'Hai correttamente reso amministratore l\'utente scelto');
    }

    public function setRevisor($user){
        $user->update([

            'is_revisor' -> true,
        ]);

        return redirect(route('admin.dashboard'))->with('message', 'Hai correttamente reso revisore l\'utente scelto');

    }

    public function setWriter($user){
        $user->update([

            'is_revisor' -> true,
        ]);

        return redirect(route('admin.dashboard'))->with('message', 'Hai correttamente reso redattore l\'utente scelto');

    }
}
