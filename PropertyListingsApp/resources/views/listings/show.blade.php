@extends('layout')

@section('content')
    @include('partials._search')
    <div class="d-flex flex-column mt-4 align-items-center text-center">
        @include('partials._imgcarousel')
        <x-listing-card :listing="$listing" :user="$user" />
    </div>
@endsection
