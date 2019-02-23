<?php
/**
 * Created by PhpStorm.
 * User: kiza
 * Date: 2/19/2019
 * Time: 3:35 PM
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Trips;
use Carbon\Carbon;

class FutureTripsController
{

    public function index()
    {
        $user = Auth::user();
        $now = Carbon::now();
        $limit = $now->toDateString();
       $futureTrips = Trips::where('arrival','>',$limit)->where('user_id', '=', $user->id)->get();
      return view('futureTrips', ['trips' => $futureTrips ] );

    }
}