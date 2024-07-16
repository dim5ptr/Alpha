<?php
// app/Http/Controllers/ProfileController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Sesuaikan dengan namespace dan nama model User Anda

class ProfileController extends Controller
{
    public function edit()
    {
        // Logic to fetch current user's profile data
        if (!auth()->check()) {
            return redirect()->route('login'); // Ganti 'login' dengan nama route login Anda
        }

        // Ambil data profil pengguna
        $user = auth()->user();

        return view('page.editProf', compact('user'));
    }

    public function update(Request $request)
    {
        // Validation rules, adjust as needed
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . auth()->id(),
            // Add more fields as necessary
        ];

        $request->validate($rules);

        // Update user's profile
        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email;
        // Update other fields as necessary
        $user->save();

        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully!');
    }
}
