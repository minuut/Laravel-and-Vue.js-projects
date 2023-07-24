@extends('layout')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Edit Profile</h2>
                        <form action="{{ route('profile.update', ['user' => auth()->id()]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="contact_information" class="form-label">Contact Information</label>
                                <input type="text" name="contact_information" class="form-control" value="{{ $user->contact_information ?? '' }}">
                            </div>

                            <div class="mb-3">
                                <label for="profile_picture" class="form-label">Profile Picture</label>
                                <input type="file" name="profile_picture" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="short_bio" class="form-label">Short Bio</label>
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
