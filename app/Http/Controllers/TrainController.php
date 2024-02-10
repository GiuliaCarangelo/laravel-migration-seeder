<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        // prendo tutti i treni
        //$trains = Train::all();

        // prendo solo i treni di oggi
        // $trains = Train::where('departure_date', Carbon::today())->get();
        $trains = Train::whereDepartureDate(Carbon::today())->get();
        return view('trains',['treni' => $trains]);
    }
}