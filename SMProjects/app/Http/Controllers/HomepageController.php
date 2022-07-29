<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function homepage(){
        return view('client.page.index');
    }
}
