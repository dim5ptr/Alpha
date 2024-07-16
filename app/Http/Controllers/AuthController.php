<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

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
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        // Kirim data ke API
        $response = Http::post(env('POSTMAN_BASE_URL') . '/register', [
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect('/login')->with('message', 'Registration successful. Please login.');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $response = Http::post(env('POSTMAN_BASE_URL') . '/login', [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if ($response->status() === 200) {
            $data = $response->json();
            session(['token' => $data['token']]);
            return redirect('/profile');
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
        $response = Http::post(env('POSTMAN_BASE_URL') . '/forgot-password', [
            'email' => $request->email,
        ]);

        return back()->with('message', 'If the email is registered, you will receive a reset link.');
    }

    public function showProfileForm()
    {
        return view('auth.profile');
    }

    public function updateProfile(Request $request)
    {
        $response = Http::withToken(session('token'))->post(env('POSTMAN_BASE_URL') . '/update-profile', [
            'email' => $request->email,
            'name' => $request->name,
        ]);

        return back()->with('message', 'Profile updated successfully.');
    }
}
