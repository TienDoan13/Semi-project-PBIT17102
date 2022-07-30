<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SigninController extends Controller
{
    public function getSignin(){
        return view('client.page.signin');
    }

    public function postSignin(Request $request)
    {
        $arr = ['name'=>$request->name, 'password'=>$request->password];
        if(Auth::attempt($arr)){
            dd('Succesfully');
        } else{
            dd('Failed');
        }
        return redirect()->route('client.page.index');
    }
    public function getSignout(){
        Auth::signout();
        return redirect()->intended('client.page.signin');
    }
}
