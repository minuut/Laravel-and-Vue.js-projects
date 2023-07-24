<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function show()
    {
        $user = auth()->user();
        return view('profile.show', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        // Ensure that the authenticated user is the same as the user being updated
        if (auth()->id() !== $user->id) {
            abort(403, 'Unauthorized action');
        }

        $validatedData = $request->validate([
            'phone_number' => 'nullable|string|max:255',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'short_bio' => 'nullable|string|max:500',
        ]);

        if ($request->hasFile('profile_picture')) {
            $profilePicture = $request->file('profile_picture');
            $fileName = time() . '.' . $profilePicture->getClientOriginalExtension();
            $profilePicture->storeAs('profile_pictures', $fileName, 'public');
            $user->profile_picture = $fileName;
        }

        $user->update([
            'phone_number' => $validatedData['phone_number'],
            'short_bio' => $validatedData['short_bio'],
        ]);

        return redirect()->route('profile.show', ['user' => $user])->with('message', 'Profiel is geupdate!');
    }

    public function edit(User $user)
    {
        // Ensure that the authenticated user is the same as the user being edited
        if (auth()->id() !== $user->id) {
            abort(403, 'Unauthorized action');
        }

        return view('profile.edit');
    }

    public function view(User $user)
    {
        return view('profile.view', compact('user'));
    }
}
