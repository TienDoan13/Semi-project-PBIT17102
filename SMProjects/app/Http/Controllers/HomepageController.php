<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function homepage(){
        $homepage=Movie::all();
        return view('client.page.index', compact('homepage'));
    }
}
