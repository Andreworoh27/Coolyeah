<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|required',
            'password' => 'required'
        ]);
        // dd($request->remember_me);
        if (Auth::attempt($credentials, $request->remember_me)) {
            // dd(Auth::user());
            return redirect('/');
        }
        return back()->withErrors(['Your Credentials Is Invalid']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
