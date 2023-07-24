@extends('layout')

@section('content')
<x-flash-message />
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                @if (auth()->user()->profile_picture)
                                    <img src="{{ asset('storage/profile_pictures/' . auth()->user()->profile_picture) }}"
                                        alt="Profile Picture" class="img-fluid">
                                @else
                                    <p>geen profielfoto ingesteld</p>
                                @endif
                            </div>
                            <div class="col-md-8">
                                <h2 class="card-title">{{ auth()->user()->name }}'s Profile</h2>
                                <p>Email: {{ auth()->user()->email }}</p>
                                <p>Contact Informatie: {{ auth()->user()->contact_information ?? 'Not provided' }}</p>
                                <p>Bio: {{ auth()->user()->short_bio ?? 'Not provided' }}</p>
                                <a href="{{ route('profile.edit', auth()->user()) }}" class="btn btn-success mt-3">Wijzig gegevens</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
