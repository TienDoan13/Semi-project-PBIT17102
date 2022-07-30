<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Signup;

class SignupController extends Controller
{
    public function signup(){
        return view('client.page.indexsignup');
    }

    public function postSignup(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('client.page.signin')->with('Succesfully', 'Signup Succesfully');
    }
}
