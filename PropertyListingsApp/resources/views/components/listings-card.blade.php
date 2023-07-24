@props(['listing'])

<div class="col-lg-4 d-flex align-items-stretch">
    <div class="card" style="width: 100%; margin-bottom: 1rem;">
        <img src="{{ $listing->afbeelding ? asset('storage/' . $listing->afbeelding) : asset('/images/house.jpg') }}"
            class="card-img-top" alt="house image" style="height: 300px; width: 100%; object-fit: cover;" />
        <div class="card-body d-flex flex-column justify-content-between">
            <h5 class="card-title">{{ $listing->title }}</h5>
            <p class="card-text">{{ $listing->location }}</p>
            <p class="card-text font-weight-bold">
                <strong>€ {{ $listing->price }} k.k. | {{ $listing->company }}</strong>
            </p>
            <a href="/listings/{{ $listing->id }}" class="btn btn-success btn-sm mb-1">Klik voor info</a>
        </div>
    </div>
</div>
