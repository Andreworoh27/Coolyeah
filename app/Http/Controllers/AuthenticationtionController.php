<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationtionController extends Controller
{
    //

    public function register(Request $request){

        $this->validate($request,[

        ]);
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $img = $request->img;
        $role = "Member";

    }

    public function login(Request $request){

    }
}
