@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <h3>Users List</h3>
        </div>
        <br>
        <table>
            <tr>
                <td>id</td>
                <td>username: </td>
                <td>name:</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->name}}</td>
                    <td><a href="/trips?id={{ $user->id }}">show trips</a></td>
                    <td><a href="/users-edit?id={{ $user->id }}">edit</a></td>
                    <td><a href="/users-delete?id={{ $user->id }}">delete</a></td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection