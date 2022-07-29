<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Signin;

class SigninController extends Controller
{
    public function signin(){
        return view('client.page.indexsignin');
    }
}
