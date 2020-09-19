<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function index()
    {

        // $user = User::findorFail(); 
            
        // return view('myprofile', ['user' => $user ]);
        // return view('myprofile');
        
    }

    public function show()
    {
        $id = Auth::user()->id;
        // dd($id);

        $user = User::findorFail($id);
        
        // //  dd($user);
        return view('myprofile', compact('user'));
    }
}
