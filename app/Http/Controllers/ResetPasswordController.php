<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//custom
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\PasswordReset;
//use Illuminate\Support\Str;

class ResetPasswordController extends Controller
{
    //
    protected function sendResetLinkResponse(Request $request)
    {
    $input = $request->only('email');
    $validator = Validator::make($input, [
    'email' => "required|email"
    ]);
    if ($validator->fails()) { print_r($validator->errors()->all());
    return response(['errors'=>$validator->errors()->all()], 422);
    }
    $response =  Password::sendResetLink($input);
    print_r($response);print_r(Password::RESET_LINK_SENT);
    if($response == Password::RESET_LINK_SENT){
    $message = "Mail send successfully";
    }else{
    $message = "Email could not be sent to this email address";
    }
    //$message = $response == Password::RESET_LINK_SENT ? 'Mail send successfully' : GLOBAL_SOMETHING_WANTS_TO_WRONG;
    $response = ['data'=>'','message' => $message];
    return response($response, 200);
    }
}
