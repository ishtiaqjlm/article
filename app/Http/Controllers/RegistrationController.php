<?php

namespace App\Http\Controllers;

use App\Models\articles;
use App\Models\CommentReply;
use App\Models\Comments;
use App\Models\Likes;
use App\Models\ReadAlready;
use App\Models\ReadLater;
use App\Models\UrgentCab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Auth;

class RegistrationController extends Controller
{
    public function index(){
        return view('registration');
    }
    public function register(Request $request){
        //print_r($request->all());
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $user=new User;
        $user->name=$request->name;
        $user->email=$request->username;
        $user->password=$request->password;
        $user->role=($request->role!='') ? $request->role : 0;
        $user->save();
        return view('login', ['msg' => 'User has been registered successfully']);


    }
    public function login(Request $request){
        //print_r($request->all());
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $user=User::where('email',$request->username)->first();
        if(!empty($user)){
            if($request->password == $user->password){
                Session::put('role', $user->role);
                Session::put('name', $user->name);
                Session::put('email', $user->email);
                Session::put('id', $user->id);
                $request->session()->regenerate();
                return redirect('/accueil');
                //$session = new  SessionModel;//::find(Session::getId());
                /*$session->user_id    = $user->id;
                $session->name       = $user->name;
                $session->email      = $user->email;
                $session->role       = $user->role;
                $session->ip_address = Request::ip();
                $session->user_agent = $request->server('HTTP_USER_AGENT');
                $session->save();*/
                //echo "<pre>";
                //var_dump(auth()->user());
                //var_dump(auth('sanctum')->user()); //->email->first()->email
                //var_dump($request->session()->get('role'));
                 //var_dump($request->session()->get('name'));
                 // var_dump($request->session()->get('email'));
                //echo auth('sanctum')->user()->role;

                //if($user->role==1)
                    //return view('accueil', ['user' => $user]);
                //else
                    //return view('subscriber', ['user' => $user]);

            }
            else{
                return back()->with(['error' => 'Email/Password did not match']);
            }
       }
       else{
                return back()->with(['error' => 'Email/Password did not match']);
       }
    }
    //
    public function sendResetLinkResponse(Request $request)
    {

            $request->validate(['email' => 'required|email']);

            $status = Password::sendResetLink(
                $request->only('email')
            );
            //var_dump($status);var_dump(Password::RESET_LINK_SENT);
            if($status === Password::RESET_LINK_SENT){ //echo "in if";exit;
                return view('password/forgot-password', ['status' => $status]);
            }else{
                return view('password/forgot-password', ['status' => 'wrong']);
            }
            //print_r($status);print_r(Password::RESET_LINK_SENT);
            /*return $status === Password::RESET_LINK_SENT
                        ? back()->with(['status' => __($status)])
                        : back()->withErrors(['email' => __($status)]);*/

    }
    public function reset(Request $request){

        return view('password.reset-password', ['token' => $request->token]);
    }

    public function sendResetResponse(Request $request){
        //password.reset
        $input = $request->only('token', 'password', 'password_confirmation');
        $validator = Validator::make($input, [
        'token' => 'required',
        'password' => 'required|confirmed|min:8',
        ]);
        if ($validator->fails()) {
            //var_dump($validator->errors()->all());
            return response(['errors'=>$validator->errors()->all()], 422);
        }
        $response = Password::reset($input, function ($user, $password) {
        $user->forceFill([
        //'password' => Hash::make($password)
        'password' => ($password)
        ])->save();
        //$user->setRememberToken(Str::random(60));
        event(new PasswordReset($user));
        });
        if($response == Password::PASSWORD_RESET){
        $message = "Password reset successfully";
        }else{
        $message = "Email could not be sent or data mis-match";
        }
        $response = ['data'=>'','message' => $message];
        //var_dump($response);
        return view('login', ['message' => $message]);
        /*Route::get('/login', function () {
            return view('login', ['message' => $message]);
        });*/
        //return response()->json($response);
    }
        public function delete_user($id){

            $user = User::find($id);
            if($user){
                $user       = User::destroy($id);
                $art        = articles::where('user_id', $id);//find and delete all articles of this user
                $art->delete();
                $cmnt       = Comments::where('user_id', $id);//find and delete all comments of this user
                $cmnt->delete();
                $cmnt_reply = CommentReply::where('user_id',$id);//find and delete all comment reply of this user
                $cmnt_reply->delete();
                $likes      = Likes::where('user_id',$id);//find and delete all likes of this user
                $likes->delete();
                $ralready   = ReadAlready::where('user_id',$id);//find and delete all ReadAlready of this user
                $ralready->delete();
                $rlater     = ReadLater::where('user_id',$id);//find and delete all ReadLater of this user
                $rlater->delete();
                $urgent_cab = UrgentCab::where('user_id',$id);//find and delete all Urgent of this user
                $urgent_cab->delete();
                return back()->with('success_del_user','Selected User and his/her data Deleted Successfully!');
            }else{
                return back()->with('error_del_user','Something went wrong');
            }
        }
        public function logout(Request $request) {

              Auth::logout();
              Session::forget(['id', 'name','email', 'role']);
              return redirect('/login');
        }
}
