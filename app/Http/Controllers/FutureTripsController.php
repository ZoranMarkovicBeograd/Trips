<?php
/**
 * Created by PhpStorm.
 * User: kiza
 * Date: 2/19/2019
 * Time: 3:35 PM
 */

namespace App\Http\Controllers;


use App\Trips;
use Carbon\Carbon;

class FutureTripsController
{

    public function index()
    {
        $now = Carbon::now();
       $limit = $now->addDays(30);
       $limit = $limit->toDateString();
       $futureTrips = Trips::where('departure','<=',$limit)->get();
      return view('futureTrips', ['futureTrips' => $futureTrips ] );

    }
}