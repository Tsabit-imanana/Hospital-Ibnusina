<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Models\Patient;
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

    public function update(Request $request, $id)
    {
        $patient = Patient::find($id);
        $patient->name = $request->name;
        $patient->birthdate = $request->birthdate;
        $patient->address = $request->address;
        $patient->save();

        return redirect()->route('profile');
    }
}
