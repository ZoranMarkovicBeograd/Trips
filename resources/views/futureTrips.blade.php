@extends('layouts.app')

@section('content')
    @foreach($futureTrips as $futureTrip)

        <div class="container">
            <div>
                <table>
                    <tr>
                        <td>City:</td>
                        <td>Arrival: </td>
                        <td>Departure:</td>
                    </tr>
                    <tr>
                        <td>{{ $futureTrip->city }}</td>
                        <td>{{ $futureTrip->arrival }}</td>
                        <td>{{ $futureTrip->departure }}</td>
                    </tr>
                </table>
            </div>
        </div>
    @endforeach
@endsection