<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Workspace;
use App\Models\ApiToken;
use App\Models\BillingQuota;
use App\Models\Bill;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string',
            'password'=>'required|string',
        ]);
        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('home')->with('success');
        }

        return back()->withErrors([
            'name' => 'Неправильное имя или пароль',
        ]);
    }

    public function destroy()
    {
        Auth::logout();
        return redirect()->route('home')->with('success');
    }
}
