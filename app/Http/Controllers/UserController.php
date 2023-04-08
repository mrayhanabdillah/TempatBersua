<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(){
        return view('register');
    }

    public function store(Request $request){
        $data = new User();
        $data->username = $request->username;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->role = "user";
        $data->status = "not logged in";
        $data->save();

        return redirect('/');
    }

    public function loginPage(){
        return view('login');
    }

    public function login(Request $request)
    {
        $data = User::where('email', $request->email)->firstOrFail();
        if ($data->email == $request->email){
                $syarat = $request->validate([
                    'email' => ['required', 'email'],
                    'password' => ['required'],
                ]);
                if (Auth::attempt($syarat)) {
                    $request->session()->regenerate();
                    if($data->role == 'user'){
                        $data->status = 'logged in';
                        $data->save();
                        return redirect()->intended('/');
                    }
                }
        }else{
            return redirect('/login');
        }
    }
}
