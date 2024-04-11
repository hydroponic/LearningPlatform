<?php

namespace App\Http\Controllers;

use App\Http\Requests\QnARequest;
use App\Models\Messages;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $request->validate([
           'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required'
        ]);
        $user = User::create([
            'name' => $request->name,
            'email'=>$request->email,
            'password' => Hash::make($request->password)
        ]);
        Auth::attempt($request->only('email','password'));
        return redirect('/');
    }
}
