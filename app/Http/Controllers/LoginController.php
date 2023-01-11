<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request){

        print_r($request->all());
        //return User::where('email',$request->username);
        
    }
}
