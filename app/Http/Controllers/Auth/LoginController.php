<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials))
        {
            return redirect()->route('home')->with('success');
        }
        return back()->withErrors([
            'email'=>'Что то не то',
        ]);
    }
    public function destroy()
    {
        Auth::logout();
        return redirect()->route('home')->with('success');
    }
}
