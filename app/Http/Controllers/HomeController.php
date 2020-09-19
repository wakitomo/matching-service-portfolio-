<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $id = Auth::user()->id;
        // $auths = Auth::user();
        $user = User::findorFail($id);
        // dd($user);

        $users = DB::table('users')
                ->orderBy('updated_at', 'desc')
                ->get();
        

        $count = (DB::table('users')->count()) -1;

        return view('search', 
        compact('users', 'count'));
    }

}
