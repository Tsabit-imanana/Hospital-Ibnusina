<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\HospitalCost;
use App\Models\HealthRecords;
use App\Models\Inpatient;
use App\Models\Room;


class HospitalCostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index()
{
    $hospitalCosts = HospitalCost::with('patient')->get();

    foreach ($hospitalCosts as $cost) {
        // Ambil inpatient terakhir berdasarkan patient_id
        $inpatient = Inpatient::where('patient_id', $cost->patient_id)->latest()->first();
        $cost->inpatient = $inpatient;

        $healthRecord = null;
        $room = null;

        if ($inpatient) {
            // Dari inpatient dapatkan room_id
            $roomId = $inpatient->room_id;

            // Ambil health record berdasar patient_id dan room_id (dari inpatient)
            $healthRecord = HealthRecords::where('patient_id', $cost->patient_id)
                                        ->where('room_id', $roomId)
                                        ->latest()
                                        ->first();

            $room = Room::find($roomId);
        }

        $cost->health_record = $healthRecord;
        $cost->health_record_room = $room;

        // Hitung grand total
        $totalPrice = optional($healthRecord)->total_price ?? 0;
        $roomPrice = optional($room)->price ?? 0;
        $cost->grand_total = $totalPrice + $roomPrice;

        // Ambil status dari HospitalCost (bukan dari health record)
        $cost->status_from_health_record = $cost->status;
    }

    return view('admin.hospital-cost.index', compact('hospitalCosts'));
}



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mengambil semua pasien
        $patients = Patient::all();
    
        // Mengirim data pasien ke view
        return view('admin.hospital-cost.create', compact('patients'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'patient_id' => 'required|exists:patients,id', // pastikan pasien ada di database
            'health_patient' => 'required|string',
            'amount' => 'required|numeric|min:0',
        ]);

        // Simpan data ke database
        $hospitalCost = new HospitalCost();
        $hospitalCost->patient_id = $request->input('patient_id');
        $hospitalCost->health_patient = $request->input('health_patient');
        $hospitalCost->amount = $request->input('amount');
        $hospitalCost->status = "unpaid";
        $hospitalCost->save();

        // Redirect atau return response sesuai kebutuhan
        return redirect()->route('admin.hospital-cost.index')->with('success', 'Hospital cost successfully added.');
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
        // Cari data berdasarkan ID
        $hospitalCost = HospitalCost::findOrFail($id);
        $patients = Patient::all(); // Untuk menampilkan pilihan pasien pada form edit
        return view('admin.hospital-cost.edit', compact('hospitalCost', 'patients'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'health_patient' => 'required|string|max:255',
            'amount' => 'required|numeric|min:1',
        ]);
    
        // Cari data hospital cost berdasarkan ID
        $hospitalCost = HospitalCost::findOrFail($id);
    
        // Update data
        $hospitalCost->update($validated);
    
        // Redirect ke halaman daftar dengan pesan sukses
        return redirect()->route('admin.hospital-cost.index')->with('success', 'Hospital cost updated successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Cari data berdasarkan ID dan hapus
        $hospitalCost = HospitalCost::findOrFail($id);
        $hospitalCost->delete();
    
        // Redirect ke halaman daftar dengan pesan sukses
        return redirect()->route('admin.hospital-cost.index')->with('success', 'Hospital cost deleted successfully');
    }

    public function markPaid($id)
{
    $hospitalCost = HospitalCost::findOrFail($id);
    $hospitalCost->status = 'paid';
    $hospitalCost->save();

    return redirect()->back()->with('success', 'Status updated to Paid successfully.');
}

    
}
