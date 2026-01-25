<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function create(){

        if (auth()->user()) {
            return $this->authentication();
        }
        // $user = auth()->user();

        return view('layouts.signin-signup');

    }

    public function register(Request $request){

        $validate = $request->validate([
        
        'name' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'department' => 'required|string|max:255',
        'number' => 'required|string|max:255',
        'password' => 'required|string|max:255',

        ]);

        $validate['password'] = bcrypt($validate['password']);

        $user = User::create($validate);

        Auth::login($user);

        return redirect()->route('account.user')->with('sucess' , 'registered');

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

            return $this->authentication();
        }

        else{
            return back()->withError([
                'login' => 'Username/Email or Password incorrect',
            ])->onlyOutput('login');
        }

    }

    public function userDash(){

        $user = auth()->user();

        return view('layouts.index' , compact('user'));

    }
    
    public function adminDash(){

        $user = auth()->user();

        return view('layouts.admin.index' , compact('user'));

    }

    public function authentication(){

        $user = auth()->user();

        if ($user->role === 'admin') {
            return redirect()->route('account.admin')->with('success' , 'Admin Logged In');
        }
        else{
            return redirect()->route('account.user')->with('success' , 'User Logged In');
        }

    }

    public function logout(Request $request){


        AUTH::logout();

        $request->session()->invalidate();

        return redirect()->route('account.create')-with('sucess' , 'Logged Out');

    }
}
