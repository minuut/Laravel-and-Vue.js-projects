@extends('layout')

@section('content')
    <x-flash-message />
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @include('components.profile-card', ['user' => auth()->user()])
                <a href="{{ route('profile.edit', auth()->user()) }}" class="btn btn-success mt-3">Wijzig gegevens</a>
            </div>
        </div>
    </div>
@endsection
