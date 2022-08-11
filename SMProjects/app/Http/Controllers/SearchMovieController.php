<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;

class SearchMovieController extends Controller
{
    public function MovieSearchs(Request $request){
        $search=$request->input('moviename');
        $movie=Movie::query()->where('movie_name','LIKE','%'.$search.'%')->get();
        return view('client.page.search',compact('movie'));
    }

}
