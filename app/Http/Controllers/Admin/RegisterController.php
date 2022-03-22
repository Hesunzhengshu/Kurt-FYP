<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller 
{
    public function register(){
        return view('users.register');
    }

    public function create(Request $request){

        $input = $request->except('_token');

        $submit = User::create(
            ['username' => $input['username'], 
            'email' => $input['email'], 
            'password' => $input['password']]);

    if ($submit) {
        return view('index.index');
    } else{
        return view('users/login');
    }

    }


}
