<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $query = Room::query();

    if ($request->has('search') && $request->search != '') {
        $query->where('type', 'like', '%' . $request->search . '%')
              ->orWhere('status', 'like', '%' . $request->search . '%');
    }

    $rooms = $query->get();

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

        $filteredFacilities = array_filter($request->facilities, function ($value) {
            return !is_null($value) && $value !== '';
        });

        $room = Room::find($id);
        $room->type = $request->type;
        $room->price = $request->price;
        $room->facilities = array_values($filteredFacilities);
        $room->status = $request->status;

        if ($request->hasFile('picture')) {
            // Delete old image if exists
            if ($room->picture && Storage::disk('public')->exists($room->picture)) {
                Storage::disk('public')->delete($room->picture);
            }

            // Store new image
            $room->picture = $request->file('picture')->store('pictures', 'public');
        }

        $room->save();

        return redirect()->route('admin.room.index');
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
