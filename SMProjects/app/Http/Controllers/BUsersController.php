<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BUsersController extends Controller
{
    public function Usersindex(){
        $user=User::all();
        return view('admin.page.listUsers', compact('user'));
    }

    public function deleteUsers($id){
        $movie=User::find($id);
        $movie->delete();
        return back();
    }
}
