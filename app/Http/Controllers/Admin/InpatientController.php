<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inpatient;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InpatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inpatients = Inpatient::all();
        return view('admin.inpatient.index', compact('inpatients'));
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
        $inpatient = Inpatient::find($id);
        return view('admin.inpatient.edit', compact('inpatient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $inpatient = Inpatient::find($id);

        $dateIn = Carbon::parse($inpatient->date_in);
        $dateOut = Carbon::parse($request->date_out);;

        $totalPrice = $inpatient->room->price * $dateIn->diffInDays($dateOut);

        // dd([$dateIn, $dateOut, $totalPrice]);

        $inpatient->date_out = $request->date_out;
        $inpatient->total_price = $totalPrice;

        $inpatient->save();

        return redirect()->route('admin.inpatient.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $inpatient = Inpatient::find($id);
        $inpatient->delete();
    }
}
