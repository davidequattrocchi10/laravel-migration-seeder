<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {

        $trains = Train::where('departure_time', 'LIKE', '2024-04-27%')->get();

        // dd($trains);
        return view('home', compact('trains'));
    }

    public function fromMilan()
    {
        $trains = Train::where('departure_station', 'Milano Centrale')->orderBy('distance', 'asc')->get();
        return view('trains_Milan', compact('trains'));
    }

    public function highSpeed()
    {
        $trains = Train::where('train_type', 'High-speed')->orderBy('duration_minutes', 'desc')->get();
        return view('highSpeed', compact('trains'));
    }

    public function fromRome()
    {
        $trains = Train::where('departure_station', 'Roma Termini')->orderBy('ticket_price', 'desc')->get();
        return view('trains_Rome', compact('trains'));
    }
}
