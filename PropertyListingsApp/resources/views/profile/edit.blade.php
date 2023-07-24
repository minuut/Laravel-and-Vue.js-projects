@extends('layout')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Wijzig uw profiel</h2>
                        <form action="{{ route('profile.update', ['user' => auth()->id()]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="phone_number" class="form-label">Telefoonnummer</label>
                                <input type="text" name="phone_number" class="form-control" value="{{ $user->phone_number ?? '' }}">
                            </div>

                            <div class="mb-3">
                                <label for="profile_picture" class="form-label">Profielafbeelding</label>
                                <input type="file" name="profile_picture" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="short_bio" class="form-label">Over uzelf</label>
                                <textarea name="short_bio" class="form-control">{{ $user->short_bio ?? '' }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-success">Update Profile</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
