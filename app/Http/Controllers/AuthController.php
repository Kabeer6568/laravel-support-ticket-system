<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function create(){

        // $user = auth()->user();

        return view('layouts.signin-signup');

    }

    public function register(Request $request){

        $user = $request->validate([
        
        'name' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'department' => 'required|string|max:255',
        'number' => 'required|string|max:255',
        'password' => 'required|string|max:255',

        ]);

        $user['password'] = bcrypt($user['password']);

        User::create($user);

        return redirect()->route('account.index')->with('sucess' , 'registered');

    }

    public function login(Request $request){

        $request->validate([

            'login' => 'required|string|max:255',
            'password' => 'required|string|max:255',

        ]);

        $loginDate = filter_var($request->login , FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

        $credentials = ([
            
            $loginDate => $request->login,
            'password' => $request->password,
        
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('account.index')->with('sucess' , 'logged In');
        }
        else{
            return back()->withError([
                'login' => 'Username/Email or Password incorrect',
            ])->onlyOutput('login');
        }

    }

    public function dash(){

        $user = auth()->user();

        return view('layouts.index' , compact('user'));

    }
}
