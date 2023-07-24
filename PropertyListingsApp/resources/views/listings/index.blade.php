@extends('layout')

@section('content')

    @include('partials._hero')
    @include('partials._search')
    <x-flash-message />
    <div class="container">
        <div class="row mt-5">
            @unless (count($listings) == 0)
                @foreach ($listings as $listing)
                    <x-listings-card :listing="$listing" /> {{-- Components->listings-card.blade.php --}}
                @endforeach
            @else
                <p>Geen zoekresultaten gevonden.</p>
            @endunless
        </div>
        {{ $listings->links('pagination::bootstrap-5') }}
    </div>

@endsection
