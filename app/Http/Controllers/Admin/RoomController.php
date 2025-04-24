<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::all();
        return view('admin.room.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.room.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $filteredFacilities = array_filter($request->facilities, function ($value) {
            return !is_null($value) && $value !== '';
        });

        $room = new Room();
        $room->type = $request->type;
        $room->price = $request->price;
        $room->facilities= array_values($filteredFacilities);
        $room->status = $request->status;
        $room->picture = $request->file('picture')->store('pictures', 'public');
        $room->save();

        return redirect()->route('admin.room.index');
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
        $room = Room::find($id);
        return view('admin.room.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // $patient = Room::find($id);
        // $patient->name = $request->name;
        // $patient->birthdate = $request->birthdate;
        // $patient->address = $request->address;
        // $patient->save();

        return redirect()->route('admin.patient.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $room = Room::find($id);
        $room->delete();
    }
}
