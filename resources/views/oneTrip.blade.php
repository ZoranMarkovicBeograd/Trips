@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <table>
                <tr>
                    <td>City:</td>
                    <td>Arrival: </td>
                    <td>Departure:</td>
                </tr>
                <tr>
                    <td>{{ $trip->city }}</td>
                    <td>{{ $trip->arrival }}</td>
                    <td>{{ $trip->departure }}</td>
                    <td><a href="/trips1/{trips1}?id={{ $trip->id }}">edit</a></td>
                </tr>
            </table>
        </div>
    </div>

@endsection

