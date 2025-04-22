<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

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
}
