@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <h3>Add</h3>
    </div>
    <form method="post" action="/trips-update">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

            <div class="col-md-6">
                <input id="city" type="text"  name="city" value="{{ $trip->city }}" required autofocus>

            </div>
        </div>

        <div class="form-group row">
            <label for="arrival" class="col-md-4 col-form-label text-md-right">{{ __('Arrival') }}</label>

            <div class="col-md-6">
                <input id="arrival" type="date"  name="arrival" value="{{ $trip->arrival }}" required>

            </div>
        </div>

        <div class="form-group row">
            <label for="departure" class="col-md-4 col-form-label text-md-right">{{ __('Departure') }}</label>

            <div class="col-md-6">
                <input id="departure" type="date"  name="departure" value="{{ $trip->departure }}" required>

            </div>
        </div>

        <input type="hidden"  name="id" value="{{ $trip->id }}">
        <input type="hidden"  name="user_id" value="{{ $trip->user_id }}">

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Submit') }}
                </button>
            </div>
        </div>
    </form>
</div>
@endsection