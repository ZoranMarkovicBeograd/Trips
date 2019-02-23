
@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <a href="{{ route('addTrip') }}">Add trip</a>
            |
            <a href="{{ route('trips') }}">Trips</a>
        </div>
        <br>
        <table>
            <tr>
                <td>City:</td>
                <td>Arrival: </td>
                <td>Departure:</td>
            </tr>
            @foreach ($trips as $trip)
                <tr>
                    <td>{{ $trip->city }}</td>
                    <td>{{ $trip->arrival }}</td>
                    <td>{{ $trip->departure }}</td>
                    <td><a href="/trips-edit?id={{ $trip->id }}">edit</a></td>
                    <td><a href="/trips-delete?id={{ $trip->id }}">delete</a></td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection