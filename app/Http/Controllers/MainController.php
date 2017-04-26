<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use App\User;
use Auth;
class MainController extends Controller
{
    public function index()
    {
        return view('layouts.index');
    }

    public function getLogin(Request $request)
    {
    	return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $user = User::where('email', $request->get('email'))->get();
        Validator::extend('matched',  function($attribute, $value) use ($user) {
            if ($attribute=='email') {
                return User::where('email', $value)->get()->count() == 1;
            }else if($attribute=='password'){
                return \Hash::check($value, $user[0]->password);
            }
        }, 'Email Or Password is incorrect');

    	$val = [
            'email' => 'required|matched',
            'password' => 'required|matched'
        ];
        $messages = [
            'email.required' => 'Please input your email',
            'password.required' => 'Please input your password'
        ];
        $validate = Validator::make($request->all(), $val, $messages);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate);
        }else{
            Auth::attempt(['email' => $request->email, 'password' => $request->password]);
            return redirect()->route('front.home');
        }

    }   

    public function getRegister(Request $request)
    {
        return view('auth.register');
    }
    public function postRegister(Request $request)
    {
        $name = $request->get('username');
        $email = $request->get('email');
        $password = $request->get('password');
        $user = new User;
        $user->username = $name;
        $user->email = $email;
        $user->password = bcrypt($password);
        if ($user->save()) {
            return redirect()->route('front.home');
        }
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
           return redirect()->route('front.home');
            
        }else{
            return redirect('');
        }
    }
}
