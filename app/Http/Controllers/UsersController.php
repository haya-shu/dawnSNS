<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function profile(){
        return view('users.profile', ['user' => Auth::user() ]);
    }

    public function edit () {
      return view('users.edit',['user' => Auth::user() ]);
    }

    public function search(Request $Request){
        return view('users.search');
    }

    public function index() {
      return view()
    }
}
