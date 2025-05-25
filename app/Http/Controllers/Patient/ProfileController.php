<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Models\HealthRecords;
use App\Models\HospitalCost;
use App\Models\Patient;
use App\Models\Room;
use App\Models\Inpatient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon; // Import Carbon

class ProfileController extends Controller
{
    public function index ()
    {
        $profile = Auth::user();
        return view('user.profile', compact('profile'));
    }

    public function history()
    {
        // Mengambil data profile pasien yang sedang login
        $profile = Auth::user();
        
        // Mendapatkan patient_id dari profile yang sedang login
        $patientid = $profile->id;
        
        // Ambil health records yang terkait dengan patient_id
        $healthRecords = HealthRecords::where('patient_id', $patientid)->get();
        
        // Ambil hospital costs yang terkait dengan patient_id
        $hospitalCosts = HospitalCost::where('patient_id', $patientid)->get();
        
        // Ambil data room yang terkait dengan health record
        $rooms = Room::whereIn('id', $healthRecords->pluck('room_id'))->get()->keyBy('id');
        
        // Ambil data rawat inap (inpatients) untuk pasien ini
        $inpatients = Inpatient::where('patient_id', $patientid)->with(['room'])->get(); // Mengambil inpatients yang terkait dengan pasien

        // Menghitung total harga pasien dengan menambahkan biaya rumah sakit dan perawatan
        $totalPrice = 0;

        // Menambahkan total harga health records
        foreach ($healthRecords as $record) {
            $totalPrice += $record->total_price;

            // Mencari biaya rumah sakit terkait dengan health_record_id
            $hospitalCost = $hospitalCosts->where('health_record_id', $record->id)->first();
            
            if ($hospitalCost) {
                $totalPrice += $hospitalCost->amount; // Pastikan 'amount' sesuai dengan field di tabel HospitalCost
            }
        }

        // Menghitung total biaya rawat inap (inpatient)
        foreach ($inpatients as $inpatient) {
            $days = Carbon::parse($inpatient->date_out)->diffInDays(Carbon::parse($inpatient->date_in));
            $roomPrice = $inpatient->room->price;
            $subtotal = $roomPrice * $days;
            $totalPrice += $subtotal;
        }

        // Mengirim data ke view
        return view('user.history', compact('profile', 'healthRecords', 'hospitalCosts', 'rooms', 'inpatients', 'totalPrice'));
    }

    public function terbayar(){
        // Mengambil data profile pasien yang sedang login
        $profile = Auth::user();
        
        // Mendapatkan patient_id dari profile yang sedang login
        $patientid = $profile->id;
        
        // Ambil health records yang terkait dengan patient_id
        $healthRecords = HealthRecords::where('patient_id', $patientid)->get();
        
        // Ambil hospital costs yang terkait dengan patient_id
        $hospitalCosts = HospitalCost::where('patient_id', $patientid)->get();
        
        // Ambil data room yang terkait dengan hospital cost
        $rooms = Room::whereIn('id', $healthRecords->pluck('room_id'))->get()->keyBy('id');
        // dd($healthRecords->pluck('room_id'));
        
        // Menghitung total harga pasien dengan menambahkan biaya rumah sakit
        $totalPrice = 0;
        
        foreach ($healthRecords as $record) {
            // Menambahkan total harga health record
            $totalPrice += $record->total_price;
            
            // Mencari biaya rumah sakit terkait dengan health_record_id
            $hospitalCost = $hospitalCosts->where('health_record_id', $record->id)->first();
            
            if ($hospitalCost) {
                // Menambahkan biaya rumah sakit jika ada
                $totalPrice += $hospitalCost->amount; // Pastikan 'amount' sesuai dengan field di tabel HospitalCost
            }
        }
        
        // Mengirim data ke view
        return view('user.history', compact('profile', 'healthRecords', 'hospitalCosts', 'rooms', 'totalPrice'));
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
