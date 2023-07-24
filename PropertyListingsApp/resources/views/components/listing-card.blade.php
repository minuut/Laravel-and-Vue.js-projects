@props(['listing', 'user'])

<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h3 class="display-7 mb-4 mt-4 text-center">{{ $listing->title }}</h3>
            <a href="{{ route('profile.view', ['user' => $user->id]) }}">View Profile</a>
            <div class="font-weight-bold mb-4 text-center">{{ $listing->company }}</div>
            <div class="my-4">
                <i class="fas fa-map-marker-alt"></i> {{ $listing->location }} <br>
                € {{ $listing->price }} k.k.
            </div>
            <hr class="mb-3">
            <div>
                <h3 class="display-7 font-weight-bold mb-4 text-center">Beschrijving</h3>
                <div class="mb-4">
                    {{ $listing->description }}
                </div>
                <div class="d-flex flex-column align-items-center">
                    <div class="d-flex gap-2">
                        <a href="{{ $listing->website }}" target="_blank" class="btn btn-light">
                            <i class="fas fa-globe"></i> Bezoek website
                        </a>
                        <a href="mailto:{{ $listing->email }}" class="btn btn-light ml-3">
                            <i class="fas fa-envelope"></i> Contact Email
                        </a>
                    </div>
                    {{-- <div class="d-flex mt-3 gap-2">
                        <a href="/listings/{{ $listing->id }}/edit" class="btn btn-warning">
                            <i class="fas fa-pencil-alt"></i> Wijzig
                        </a>
                        <form method="POST" action="/listings/{{ $listing->id }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                <i class="fas fa-trash"></i> Verwijder
                            </button>
                        </form> --}}
                </div>
            </div>
            <div class="mb-4">
            </div>
        </div>
    </div>
</div>
