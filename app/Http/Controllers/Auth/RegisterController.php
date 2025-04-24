<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'address' => 'required|string',
            'gender' => 'required',
            'username' => 'required|string|unique:users,username',
            'password' => 'required|min:8|confirmed'
        ]);

        $patient = Patient::create([
            'name' => $request->name,
            'birthdate' => $request->birthdate,
            'address' => $request->address,
            'gender' => $request->gender,
            'username' => $request->username,
            'password' => bcrypt($request->password)
        ]);

        $patient->assignRole('patient');

        $credentials = $request->only('username', 'password');

        if (Auth::guard('patient')->attempt($credentials)) {
            return redirect()->intended('/profile');
        }

        return redirect()->route('user.profile');
    }
}
