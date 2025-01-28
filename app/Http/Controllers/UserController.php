<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        return view('dashboard');
    }

   
    public function create()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');

    }
    public function registration(Request $request)
    {   
       $attributes = $request->validate([
            'userName' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'password' => 'required|min:6',
        ]);
        $user= User::create($attributes);
        Auth::login($user);
        return redirect('dashboard');

    }

   
    public function store(Request $request)
    {   
        $credintials = $request->validate([
            'login' => 'required',
            'password' => 'required|min:6',
        ]);
        $login = $credintials['login'];
        $password = $credintials['password'];
        $user = User::where('userName',$login)->orWhere('phone',$login)->orWhere('email',$login)->first();
        if($user && Hash::check($password, $user->password)){
            Auth::login($user);
            return redirect('dashboard');
        }
        else{
            return back()->withErrors([
                'login' => 'The provided credentials do not match ',
            ]);
        }
        
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(){
        Auth::logout();
        session()->regenerate();
        return redirect('/');
    }
    
   
}
