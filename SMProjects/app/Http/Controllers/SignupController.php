<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class SignupController extends Controller
{
    public function getSignup(){
        return view('client.page.indexsignup');
    }

    public function postSignup(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->remember_token = Str::random(10);
        $user->save();
        return redirect()->route("client.page.signin");
    }
}
