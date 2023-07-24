@extends('layout')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @include('components.profile-card', ['user' => $user])
            </div>
        </div>
    </div>
@endsection
