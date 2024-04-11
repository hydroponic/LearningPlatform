<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function create()
    {
        return view('login');
    }
    public function store(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password' => 'required'
        ]);
        $f=$request->only('email','password');
        if (Auth::attempt($f))
            return redirect('/');
        else return redirect(route('login'))->withErrors(['logerror'=>'Login error, please try again']);
    }
    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
