@extends('layout')

@section('content')
    <x-flash-message />
    <div class="container d-flex justify-content-center mt-4 mb-4">
        <div class="col-lg-6 mx-auto form-container">
            <form method="POST" action="/listings/{{ $listing->id }}" enctype="multipart/form-data" class="form-background">
                @csrf
                @method('PUT')
                <h1 class="text-center mb-4">Wijzig woningdetails</h1>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label for="title">Straatnaam en huisnummer</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Straatnaam en huisnummer" value="{{ $listing->title }}">
                            @error('title')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label for="adres">Postcode en plaats</label>
                            <input type="text" class="form-control" id="location" name="location"
                                placeholder="Postcode en plaatsnaam" value="{{ $listing->location }}">
                            @error('location')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label for="price">Prijs</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">&euro;</span>
                                </div>
                                <input type="number" class="form-control" id="price" name="price"
                                    value="{{ $listing->price }}">
                            </div>
                            @error('price')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label for="company">Bedrijf</label>
                            <input type="text" class="form-control" id="company" name="company" placeholder="bedrijf"
                                value="{{ $listing->company }}" placeholder="">
                            @error('company')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label for="website">Website</label>
                            <input type="text" class="form-control" id="website" name="website" placeholder="test.com"
                                value="{{ $listing->website }}" placeholder="">
                            @error('website')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email"
                                placeholder="test@mail.com" value="{{ $listing->email }}"placeholder="">
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label for="tags">Zoekwoorden</label>
                            <input type="text" class="form-control" id="tags" name="tags"
                                value="{{ $listing->tags }}" placeholder="Voorbeeld: Woningsoort, Buurt, etc..">
                            @error('tags')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label for="description">Omschrijving</label>
                            <textarea class="form-control" id="description" name="description" rows="6" placeholder="">{{ $listing->description }}</textarea>
                            @error('description')
                                <p class="text-danger">
                                    {{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- I need to change this later --}}

                <div class="form-group">
                    <label for="afbeelding" class="d-block text-muted mb-2">Afbeeldingen</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="afbeelding" name="afbeelding">
                        @error('afbeelding')
                            <p class="text-danger text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="mt-4">
                <img src="{{ $listing->afbeelding ? asset('storage/' . $listing->afbeelding) : asset('/images/house.jpg') }}"
                            class="img-fluid">
                </div>
                <div class="d-flex mt-3">
                    <button type="submit" class="btn btn-success mx-auto">Wijzig</button>
                </div>
            </form>
        </div>
    </div>
@endsection
