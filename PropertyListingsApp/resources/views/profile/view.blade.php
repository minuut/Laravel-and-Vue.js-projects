@extends('layout')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                @if($user->profile_picture)
                                    <img src="{{ asset('storage/profile_pictures/' . $user->profile_picture) }}" alt="Profile Picture" class="img-fluid">
                                @else
                                    <p>geen profielfoto ingesteld</p>
                                @endif
                            </div>
                            <div class="col-md-8">
                                <h2 class="card-title">{{ $user->name }}'s Profile</h2>
                                <p>Email: {{ $user->email }}</p>
                                <p>Contact Informatie: {{ $user->contact_information ?? 'Not provided' }}</p>
                                <p>Bio: {{ $user->short_bio ?? 'Not provided' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
