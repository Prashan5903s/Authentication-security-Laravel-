<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class users extends Controller
{
    function list()
    {
        $user = User::all();
        return view('userlist', ['user'=>$user]);
    }
    function create()
    {
        return view('create');
    }

    function loginsubmit(Request $req)
    {
        return User::select('name')->where(
            [
                ['email', '=', $req->email],
                ['password', '=', $req->password]
            ]
        )->get();
        //print_r($req->input());
    }

    function createsubmit(Request $req)
    {
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $result = $user->save();
        if ($result) {
            return redirect('/');
        }
    }
}
