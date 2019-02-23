<?php

namespace App\Http\Controllers;

use App\Trips;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;
use function PhpParser\filesInDir;

class TripsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();

        if(Gate::allows('admin', $user)){
            $trips = Trips::all();
        } else {
            $trips = DB::table('trips')->where('user_id', '=', $user->id)->get();
        }


        return view('trips', ['trips' =>$trips] );
    }

    public function addTrip()
    {
        return view('addTrip');
    }

    public function edit(Request $request)
    {
        $tripId = $request->get('id');
        $trip = Trips::where('id', $tripId)->first();
        return view('editTrip', ['trip' => $trip]);
    }

    public function create(Request $request)
    {
        // Create trips
        $trips = new Trips();
        $user = Auth::user();
        $trips->city = $request->input('city');
        $trips->user_id = $user->id;
        $trips->arrival = $request->input('arrival');
        $trips->departure = $request->input('departure');
        $trips->save();

        return Redirect::to('/trips');


    }

    public function update(Request $request)
    {
        $trip = Trips::find($request->input('id'));
        $trip->city = $request->input('city');
        $trip->arrival = $request->input('arrival');
        $trip->departure = $request->input('departure');
        $trip->save();

        return Redirect::to('/trips');
    }

    public function delete(Request $request)
    {
        $trip = Trips::find($request->input('id'));
        $trip->delete();

        return Redirect::to('/trips');
    }
}
