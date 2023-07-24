<div class="card shadow">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4 d-flex align-items-center">
                <div class="profile-picture">
                    @if($user->profile_picture)
                    <img src="{{ asset('storage/profile_pictures/' . $user->profile_picture) }}" alt="Profile Picture" class="img-fluid rounded-circle">
                @else
                    <div class="no-profile-picture">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid rounded-circle" style="background-color: black;">
                    </div>
                @endif
                </div>
            </div>
            <div class="col-md-8">
                <h2 class="card-title">{{ $user->name }}</h2>
                <p class="mb-2"><strong>Email:</strong> {{ $user->email }}</p>
                <p class="mb-2"><strong>Telefoonnummer:</strong> {{ $user->phone_number ?? 'N/A' }}</p>
                <p><strong>Lid sinds:</strong> {{ $user->created_at->diffForHumans() }}</p>
                <p class="mb-2"><strong>Bio:</strong> {{ $user->short_bio ?? 'N/A' }}</p>
            </div>
        </div>
    </div>
</div>

