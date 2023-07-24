@extends('layout')

@section('content')
    <header class="text-center mt-3">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Registreren
        </h2>
        <p class="mb-4">Maak hier een account aan</p>
    </header>

    <div class="container d-flex justify-content-center mt-4 mb-4">
        <div class="col-lg-6 mx-auto form-container">
            <form method="POST" action="/users" enctype="multipart/form-data" class="form-background">
                @csrf
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label for="username">Gebruikersnaam</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ old('name') }}" placeholder="">
                            @error('username')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder=""
                                value="{{ old('email') }}" placeholder="">
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label for="password">Wachtwoord</label>
                            <input type="password" class="form-control" id="password" name="password"
                                value="{{ old('password') }}" placeholder="">
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label for="password">Herhaal wachtwoord</label>
                            <input type="password" class="form-control" id="password" name="password_confirmation"
                                value="{{ old('password') }}" placeholder="">
                            @error('password_confirmation')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <button type="submit" class="btn btn-success mx-auto">Registreer</button>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <p>
                        <a href="/login">Heeft u al een account?</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
@endsection
