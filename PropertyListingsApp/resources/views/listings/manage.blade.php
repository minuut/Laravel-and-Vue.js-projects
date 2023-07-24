@extends('layout')

@section('content')
    <header>
        <h1 class="text-center mb-4 mt-4">Listing Management</h1>
    </header>

    <div class="d-flex flex-column align-items-center" style="min-height: 40vh;">
        <table class="table table-bordered table-hover">
            <tbody>
                @unless ($listings->isEmpty())
                    @foreach ($listings as $listing)
                        <tr>
                            <td class="px-2 py-2 text-center bg-light">
                                <a href="/listings/{{ $listing->id }}" class="text-decoration-none text-dark fw-bold">
                                    Naam: {{ $listing->title }}
                                </a>
                            </td>
                            <td class="px-2 py-2 text-center bg-light">
                                <span class="text-decoration-none text-dark fw-bold">Postcode: {{ $listing->location ?? '' }}</span>
                            </td>
                            <td class="px-2 py-2 text-center bg-light">
                                <span class="text-decoration-none text-dark fw-bold">Prijs: {{ $listing->price ?? '' }}</span>
                            </td>
                            <td class="px-2 py-2 text-center bg-light">
                                <span class="text-decoration-none text-dark fw-bold">Email: {{ $listing->email ?? '' }}</span>
                            </td>
                            <td class="px-2 py-2 text-center bg-light">
                                <a href="/listings/{{ $listing->id }}/edit" class="btn btn-primary btn-sm">
                                    <i class="fas fa-pencil-alt me-2"></i> Edit
                                </a>
                            </td>
                            <td class="px-2 py-2 text-center bg-light">
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
@endsection
