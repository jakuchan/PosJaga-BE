<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function index() {
        return view('session/index');
    }

    public function login(Request $request) {
        $request -> validate(
        [
            'username' => 'required',
            'password' => 'required'
        ]);

        $loginInfo = 
        [
            'username' => $request -> username,
            'password' => $request -> password
        ];

        if(Auth::attempt($loginInfo)) {
            return redirect('/dashboard')->with('log-notif', true);
        }
        return redirect('/login')->with('fail-notif', true);
    }

    public function logout() {
        Auth::logout();
        return redirect('login');
    }
}