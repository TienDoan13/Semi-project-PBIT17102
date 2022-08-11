<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;
use Illuminate\Http\Request;

class BSearchController extends Controller
{
    public function MovieSearch(Request $request){
        $search=$request->input('movie_name');
        $movie=Movie::query()->where('movie_name','LIKE','%'.$search.'%')->get();
        return view('admin.page.searchMovie',compact('movie'));
    }
<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
}
