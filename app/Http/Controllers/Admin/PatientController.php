<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $query = Patient::query();

    if ($request->has('search') && $request->search != '') {
        $query->where('name', 'like', '%' . $request->search . '%')
              ->orWhere('address', 'like', '%' . $request->search . '%')
              ->orWhere('gender', 'like', '%' . $request->search . '%');
    }

    $patients = $query->get();

    return view('admin.patient.index', compact('patients'));
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
    public function edit($id)
    {
        $patient = Patient::find($id);
        return view('admin.patient.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $patient = Patient::find($id);
        $patient->name = $request->name;
        $patient->birthdate = $request->birthdate;
        $patient->address = $request->address;
        $patient->save();

        return redirect()->route('admin.patient.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
   
        $patient = Patient::find($id);
        $patient->delete();
        return redirect()->route('admin.patient.index');

    }
}
