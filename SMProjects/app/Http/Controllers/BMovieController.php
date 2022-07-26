<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BMovieController extends Controller
{
    public function Movieindex(){
        $movie=Movie::all();
        return view('admin.page.listMovie', compact('movie'));
    }

    public function getAddMovie(){
        return view('admin.page.addMovie');
    }

    public function postAddMovie(Request $request){
        $movie=new Movie;
        $movie->movie_name=$request->movie_name;
        $movie->movie_description=$request->movie_description;
        $movie->release_date=$request->release_date;
        $movie->director=$request->director;
        $movie->main_character=$request->main_character;
        $movie->price=$request->price;
        $movie->save();
        return redirect()->route('admin.movie.index')->with('Add new movie Successfully');
    }

    public function getEditMovie($movie_id){
        $data['movie']=Movie::find($movie_id);
        return view('admin.page.editMovie',$data);
    }

    public function postEditMovie(Request $request,$movie_id){
        $movie=Movie::find($movie_id);
        $movie->movie_name=$request->movie_name;
        $movie->movie_description=$request->movie_description;
        $movie->release_date=$request->release_date;
        $movie->director=$request->director;
        $movie->main_character=$request->main_character;
        $movie->price=$request->price;
        $movie->save();
        return redirect()->route('admin.movie.index');
    }

    public function deleteMovie($movie_id){
        $movie=Movie::find($movie_id);
        $movie->delete();
        return back();
    }
}
