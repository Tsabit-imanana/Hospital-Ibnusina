<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\Room;
use App\Models\Inpatient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd([
        //     'admin' => Auth::guard('admin')->check(),
        //     'patient' => Auth::guard('patient')->check(),
        //     'web' => Auth::guard('web')->check(), // check in case Laravel is auto-logging into this
        //     'default' => Auth::check(), // uses web
        // ]);
        $rooms = Room::all()->where('status', 'available');
        $patients = Patient::all();
        $inpatients = Inpatient::with('patient', 'room')->get();
        return view('admin.dashboard', compact('rooms', 'patients','inpatients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
