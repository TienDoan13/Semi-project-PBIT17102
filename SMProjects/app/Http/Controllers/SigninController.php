<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Homepage;

class SigninController extends Controller
{
    public function getSignin(){
        return view('client.page.signin');
    }

    public function postSignin(Request $request)
    {
        if($request->isMethod('POST')){
            $validator=validator::make($request->all(),[
                'email'=>'required|email|max:100',
                'password'=>'required',
            ]);

            if($validator->fails()){
                return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }

            $remember=$request->remember;
            if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
                if(Auth::user()->role==2){
                    $homepage=Homepage::all();
                    return view('client.page.index',compact('homepage'));
                }
                else{
                    return view('admin.page.index');
                }
            }
        }
    }
}