<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Gate;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auth =   auth()->user();

        $users = User::where('type','customer')->get();
        // dd($users);
        foreach($users as $user){
            $user->email = decrypt($user->email);
            $user->name = decrypt($user->name);
        }

        if (Gate::denies('can_view_data', $auth)){
            return view('layouts.home');
        }
        return view('layouts.data',['users'=>$users]);
        
    }
}
