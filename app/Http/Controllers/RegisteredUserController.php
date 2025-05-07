<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Validation\Rules\Password;
class RegisteredUserController extends Controller
{
   
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userAttributes = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', Password::min(6)],
        ]);
    
        $employerAttributes = $request->validate([
            'employer' => ['required'],
            'logo' => ['required', 'file', 'mimes:png,jpg,webp'],
        ]);
    
        // Hash the password
        $userAttributes['password'] = bcrypt($userAttributes['password']);
    
        $user = User::create($userAttributes);
    
        $logoPath = $request->logo->store('logos');
    
        $user->employer()->create([
            'name' => $employerAttributes['employer'],
            'logo' => $logoPath
        ]);
    
        Auth::login($user);
    
        return redirect('/login');
    }
    

}
