<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8|confirmed',
            'role' => 'required|in:superadmin,user'
        ]);

        if ($validator->fails()) {
            return redirect()->route('register')
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $user->assignRole($request->role);
        if ($user) {
            Auth::login($user);
            return redirect()->route('login')->with('success', 'Register success');
        } else {
            return redirect()->route('register')->with('error', 'Register failed');
        }
    }

    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('login')
                ->withErrors($validator)
                ->withInput();
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->route('profiles.profile')->with('success', 'Login success');
        } else {
            return redirect()->route('login')->with('error', 'Login failed email or password is incorrect');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    
    // public function loginGoogle()
    // {
    //     return Socialite::driver("google")->redirect();
    // }
    
    // public function loginGoogleCallback()
    // {
    //     $user = Socialite::driver("google")->user();
          
    //     $existingUser = User::where("email", $user -> email)->first();

    //     if ($existingUser){
    //         Auth::login($existingUser);
    //     } else {
    //         $newUser =new User();
    //         $newUser->google_id = $user->id;
    //         $newUser->name = $user -> name;
    //         $newUser->email = $user -> email;
    //         $newUser->password = Hash::make(Str::random(15));  
    //         $newUser->gender = "male";
    //         $newUser->roles = "user";
    //         $newUser->age = "12";
    //         $newUser->birth = "0122-12-12";
    //         $newUser->address = "123";
    //         $newUser->save();
            
    //         Auth::login($newUser);
    //     }

    //     return redirect()->route("profiles.profile");
    // }
}