@extends('layout')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Listing Management</h1>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center">Naam</th>
                        <th class="text-center">Postcode</th>
                        <th class="text-center">Prijs</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Edit</th>
                        <th class="text-center">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @unless ($listings->isEmpty())
                        @foreach ($listings as $listing)
                            <tr>
                                <td class="text-center">
                                    <a href="/listings/{{ $listing->id }}" class="text-decoration-none text-dark fw-bold">
                                        {{ $listing->title }}
                                    </a>
                                </td>
                                <td class="text-center">{{ $listing->location ?? '' }}</td>
                                <td class="text-center">{{ $listing->price ?? '' }}</td>
                                <td class="text-center">{{ $listing->email ?? '' }}</td>
                                <td class="text-center">
                                    <a href="/listings/{{ $listing->id }}/edit" class="btn btn-primary btn-sm">
                                        <i class="fas fa-pencil-alt me-2"></i> Edit
                                    </a>
                                </td>
                                <td class="text-center">
                                    <form method="POST" action="/listings/{{ $listing->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash me-2"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6" class="text-center">
                                <p class="mb-0">No listings found.</p>
                            </td>
                        </tr>
                    @endunless
                </tbody>
            </table>
        </div>
    </div>
@endsection
