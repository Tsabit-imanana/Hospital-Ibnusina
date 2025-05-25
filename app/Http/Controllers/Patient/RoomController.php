<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Models\Inpatient;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('user.room.index', compact('rooms'));
    }

    public function show($id)
    {
        $room = Room::find($id);
        return view('user.room.show', compact('room'));
    }

    public function appointment($id)
    {
        $room = Room::find($id);
        return view('user.room.appointment', compact('room'));
    }

    public function bookAppointment(Request $request, $id)
    {
        $room = Room::find($id);

        $inpatient = new Inpatient();
        $inpatient->room_id = $room->id;
        $inpatient->patient_id = Auth::user()->id;
        $inpatient->date_in = $request->date_in;
        $inpatient->date_out = Carbon::parse($request->date_in)->addDay()->toDateString();
        $inpatient->status = 'in_progress';
        $inpatient->total_price = $room->price;

        // dd($inpatient);
        $inpatient->save();

        return redirect()->back();
    }


}
