@extends('layout')

@section('content')
    <header class="text-center mt-3">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Inloggen
        </h2>
        <p class="mb-4">Vul je gegevens in om in te loggen</p>
    </header>

    <div class="container d-flex justify-content-center mt-4 mb-4">
        <div class="col-lg-6 mx-auto form-container" style="margin-bottom: 100px;">
            <form method="POST" action="/users/authenticate" enctype="multipart/form-data" class="form-background">
                @csrf
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
                <div class="d-flex justify-content-center mt-3">
                    <button type="submit" class="btn btn-success mx-auto">Inloggen</button>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <p>
                        <a href="/register">Heeft u nog geen account?</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
@endsection
