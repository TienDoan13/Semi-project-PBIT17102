<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SigninController extends Controller
{
    public function getSignin(){
        return view('client.page.indexsignin');
    }

    public function postSignin(Request $request)
    {
        $arr = ['name'=>$request->name, 'password'=>$request->password];
        if(Auth::attempt($arr)){
            return dd('Succesfully');
            return redirect()->route('client.page.index');
        } else{
            dd('Failed');
        }
    }
    public function getSignout(){
        Auth::signout();
        return redirect()->intended('client.page.indexsignin');
    }
}