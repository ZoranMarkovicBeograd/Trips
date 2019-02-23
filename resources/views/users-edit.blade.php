@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <h3>Edit</h3>
        </div>
        <form method="POST" action="/users-update">
            @csrf

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text"  name="name" value="{{ $user->name }}" required >


                </div>
            </div>

            <div class="form-group row">
                <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('username') }}</label>

                <div class="col-md-6">
                    <input id="username" type="text"  name="username" value="{{ $user->username }}" required>

                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password"  name="password" value="" >

                </div>
            </div>

            <input id="password" type="hidden"  name="id" value="{{ $user->id }}" >
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