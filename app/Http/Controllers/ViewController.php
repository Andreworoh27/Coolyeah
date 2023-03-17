<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    //
    public function initialPage()
    {
        if (Auth::check()) {
            return view('Home.home')->with('courses', Course::all());
        } else {
            return view('Template.navbar');
        }
    }

    public function showLoginPage()
    {
        return view('Authentication.login');
    }

    public function showRegisterPage()
    {
        return view('Authentication.register');
    }
}
