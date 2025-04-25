<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HealthRecords;
use App\Models\Patient;
use App\Models\Room;
use Illuminate\Http\Request;

class HealthRecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $health_records = HealthRecords::all();
        return view('admin.health-records.index', compact('health_records'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $patients = Patient::all();
        $rooms = Room::all();
        return view('admin.health-records.create', compact('patients', 'rooms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $records = $this->cleanRecords($request);
        $totalPrice = $this->totalPrice($request);

        $healthRecords = new HealthRecords();
        $healthRecords->patient_id = $request->patient_id;
        $healthRecords->room_id = $request->room_id;
        $healthRecords->check_ups = $records;
        $healthRecords->total_price = $totalPrice;
        // dd($healthRecords);
        $healthRecords->save();

        return redirect()->route('admin.health-record.index');
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
        $health_record_data = HealthRecords::find($id);
        return view('admin.health-records.edit', compact('health_record_data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $records = $this->cleanRecords($request);
        $totalPrice = $this->totalPrice($request);

        $healthRecords = HealthRecords::find($id);
        $healthRecords->check_ups = $records;
        $healthRecords->total_price = $totalPrice;
        $healthRecords->save();

        return redirect()->route('admin.health-record.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $health_record = HealthRecords::find($id);
        $health_record->delete();
    }

    private function cleanRecords($request): array
    {
        $healthRecords = $request->input('records.health_record');
        $prices = $request->input('records.price');

        $records = [];
        foreach ($healthRecords as $i => $key) {
            if ($key !== null && $key !== '' && $prices[$i] !== null && $prices[$i] !== '') {
                $records[$key] = $prices[$i];
            }
        }

        return $records;
    }

    private function totalPrice($request)
    {
        return array_sum($request->input('records.price'));
    }
}
