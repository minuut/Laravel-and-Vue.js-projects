<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PropertyListing;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class ListingController extends Controller
{
  // Show All Property Listings
  public function index()
  {
    $listings = PropertyListing::latest()
      ->filter(request(['tags', 'search', 'title', 'location', 'company', 'description', 'price']))
      ->paginate(6);

    foreach ($listings as $listing) {
      $listing->price = number_format($listing->price / 1000, 3);
    }

    return view('listings.index', [
      'listings' => $listings
    ]);
  }

  public function show(PropertyListing $listing)
  {
      if ($listing) {
          $listing->price = number_format($listing->price / 1000, 3);

          $user = $listing->user;
  
          return view('listings.show', [
              'listing' => $listing,
              'user' => $user,
          ]);
      } else {
          abort(404);
      }
    }

  // Show Create Form
  public function create()
  {
    return view('listings.create');
  }

  // Store Property Listing
  public function store(Request $request)
  {
    $formVeld = $request->validate([
      'title' => ['required', Rule::unique(
        'properties',
        'title'
      )],
      'location' => 'required',
      'price' => 'required',
      'company' => 'required',
      'website' => 'required',
      'email' => ['required', 'email'],
      'tags' => 'required',
      'description' => 'required'
    ]);

    // Image Storing, eventually needs multiple images.
    if ($request->hasFile('afbeelding')) {
      $formVeld['afbeelding'] = $request->file('afbeelding')->store('afbeeldingen', 'public');
    } else {
      $formVeld['afbeelding'] = '';
    }

    // Assign the logged in user's id to the user_id field
    $formVeld['user_id'] = auth()->id();

    PropertyListing::create($formVeld);

    return redirect('/')->with('message', 'Woning is geplaatst!');
  }

  // Show Edit Form
  public function edit(PropertyListing $listing)
  {
    return view('listings.edit', ['listing' => $listing]);
  }

  // Update Single Listing
  public function update(Request $request, PropertyListing $listing)
  {
    // Logged In User Has To Be Owner
    if ($listing->user_id != auth()->id()) {
      abort(403, 'Unauthorized Action');
    }

    $formVeld = $request->validate([
      'title' => ['required'],
      'location' => 'required',
      'price' => 'required',
      'company' => 'required',
      'website' => 'required',
      'email' => ['required', 'email'],
      'tags' => 'required',
      'description' => 'required'
    ]);

    // Image Storing, eventually needs multiple images.
    if ($request->hasFile('afbeelding')) {
      $formVeld['afbeelding'] = $request->file('afbeelding')->store('afbeeldingen', 'public');
    } else {
      $formVeld['afbeelding'] = $listing->afbeelding;
    }

    $listing->update($formVeld);
    //dd($request);
    return back()->with('message', 'Woningdetails zijn gewijzigd!');
  }

  // Delete Single Listing
  public function destroy(PropertyListing $listing)
  {

    // Logged In User Has To Be Owner
    if ($listing->user_id != auth()->id()) {
      abort(403, 'Unauthorized Action');
    }

    $listing->delete();
    return redirect('/')->with('message', 'De woning is verwijderd!');
  }

  // Manage Listings
  public function manage()
  {
    return view('listings.manage', ['listings' => auth()->user()->PropertyListings()->get()]);
  }
}
