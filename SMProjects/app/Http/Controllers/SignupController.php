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
}
