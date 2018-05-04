<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getSignForm()
    {
        return view('sign_in');
    }


    public  function postSignUp(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email|unique:users',
            'first_name'=>'required|max:120',
            'password'=>'required|min:4'
        ]);
        $email= $request['email'];
        $first_name= $request['first_name'];
        $password= bcrypt($request['password']);
        $user= new User();
        $user->email=$email;
        $user->first_name=$first_name;
        $user->password=$password;
        $user->save();

        Auth::login($user);
        $message= $first_name."  You have successfully Signed up ";
        return redirect()->route('dashboard')->with(['message'=> $message]);

    }

    public  function postSignIn(Request $request)
    {

        $this->validate($request,[
            'email'=>'required',
            'password'=>'required']);


        if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password']])){

            $message= "Welcome to Campus Chatroom";
            return redirect()->route('dashboard')->with(['message'=>$message]);
        }
        else{
            $message="Login failed, check your Email or Password";
            return redirect()->route('home')->with(['message'=>$message]);
        }

    }
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('home');
    }


}