<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Laravel\Pail\ValueObjects\Origin\Console;
use Log;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $data = $request->validated();

        try {
            User::create($data);

            return redirect()->back()->with('open_signin_modal', true);
        } catch (\Exception $e) {
            return back()
                ->withErrors(['register' => $e->getMessage()], 'register')
                ->with('errorBag', 'register');
        }
    }

    public function login(LoginRequest $request)
    {
        $data = $request->validated();

        $key = Str::lower($data['email']) . '|' . $request->ip();

        if (RateLimiter::tooManyAttempts($key, 3)) {
            $seconds = RateLimiter::availableIn($key);
            return back()->withErrors([
                'credentials' => "Too many login attempts. Please try again in {$seconds} seconds."
            ], 'login')->with('errorBag', 'login');
        }

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            RateLimiter::clear($key); // reset attempts after successful login

            $toast = [
                'title' => 'Successfully signed in',
                'type' => 'info',
            ];

            return redirect()->back()->with('toast', $toast);
        }

        RateLimiter::hit($key, 180); // lock for 3 minutes

        return back()->withErrors([
            'credentials' => 'Sorry, incorrect credentials',
        ], 'login')->with('errorBag', 'login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        $toast = [
            'title' => 'Successfully Logout',
            'type' => 'info',
        ];

        return redirect()->back()->with('toast', $toast);
    }
}
