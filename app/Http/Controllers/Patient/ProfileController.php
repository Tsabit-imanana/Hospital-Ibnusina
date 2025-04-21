<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index ()
    {
        $profile = Auth::user();
        return view('user.profile', compact('profile'));
    }

    public function history()
    {
        $profile = Auth::user();
        return view('user.history', compact('profile'));
    }
}
