<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validasi data input
        $request->validate([
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        // Simpan data pengguna ke database
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        // Langsung login setelah registrasi berhasil
        auth()->login($user);

        // Redirect ke halaman dashboard atau halaman utama dengan pesan sukses
        return redirect()->intended('/dashboard')->with('message', 'Registration successful. You are now logged in.');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:6'],
        ]);

        // Kirim permintaan login ke API atau proses lainnya
        $response = Http::post(env('POSTMAN_BASE_URL') . '/login', [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if ($response->successful()) {
            $data = $response->json();
            session(['token' => $data['token'], 'user' => $data['user']]);

            if ($data['user']['is_admin']) {
                return redirect()->route('admindashboard');
            } else {
                return redirect()->route('dashboard');
            }
        } else {
            return back()->withErrors(['email' => 'Invalid email or password.']);
        }
    }

    public function showForgotPasswordForm()
    {
        return view('auth.forgot-password');
    }

    public function forgotPassword(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        // Kirim permintaan reset password ke API atau proses lainnya
        $response = Http::post(env('POSTMAN_BASE_URL') . '/forgot-password', [
            'email' => $request->email,
        ]);

        return back()->with('message', 'If the email is registered, you will receive a reset link.');
    }

    public function showProfileForm()
    {
        $user = auth()->user(); // Mengambil data pengguna yang sedang login
        return view('auth.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users,username,' . auth()->id()],
            'profile_photo' => ['image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ]);

        $user = auth()->user();
        $user->email = $request->email;
        $user->username = $request->username;

        if ($request->hasFile('profile_photo')) {
            // Simpan foto profil
            $profilePhotoPath = $request->file('profile_photo')->store('profile-photos', 'public');
            $user->profile_photo = $profilePhotoPath;
        }

        $user->save();

        return back()->with('message', 'Profile updated successfully.');
    }
}
