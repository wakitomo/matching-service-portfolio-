<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class VisitorController extends Controller
{
    
    public function index()
    {
        // $users = User::findorFail();
        
        $users = DB::table('users')
                ->orderBy('updated_at', 'desc')
                ->get();

  
        return view('visitor', ['users' => $users]);
        // dd($users);
    }

}
