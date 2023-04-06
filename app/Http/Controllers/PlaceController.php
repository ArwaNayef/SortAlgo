<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlaceController extends Controller
{

    public function index()
    {
        $places = Place::select(DB::raw('*, (0.3*avg_rating) + (0.7*user_number/(user_number+5)) as weightRating'))
            ->orderBy('weightRating', 'desc')->get();

        return view('places.index', ['places' => $places]);
    }
}
