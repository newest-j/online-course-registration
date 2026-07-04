<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    //
    public function redirectToGoogle(string $mode)
    {

        $mode = in_array($mode, ['signup', 'login'], true) ? $mode : "null";
        session(['oauth_mode' => $mode]);

        $response = Socialite::driver('google')->redirect();
        $url = $response->getTargetUrl();
        $shouldForcePick = $mode === 'signup';
        if ($shouldForcePick) {
            $sep = str_contains($url, '?') ? '&' : '?';
            $url .= $sep . http_build_query(['prompt' => 'select_account']);
        }
        return redirect()->away($url);
    }


    public function handleGoogleCallback(Request $resquest)
    {
        try {
            //code...
            $googleUser = Socialite::driver('google')->user();
            $email = strtolower(trim($googleUser->getEmail()));
            $raw = $googleUser->user;
            $verified = $raw['email_verified'] ?? $raw['verified_email'] ?? false;

            $spa = rtrim(env('FRONTEND_ORIGIN', 'http://localhost:5173'), '/');
            if (!$email && !$verified) {
                return redirect()->away($spa . '/oauth/callback?ok=0&error=unverified_email');
            }

            $user = User::where('email', $email)->first();

            $mode = $resquest->session()->pull('oauth_mode');

            if ($mode === 'login') {
                if (!$user) {
                    return redirect()->away($spa . '/oauth/callback?ok=0&error=user_not_found');
                }
                Auth::login($user);
                $resquest->session()->regenerate();
                $resquest->session()->regenerateToken();
                return redirect()->away($spa . '/oauth/callback?ok=1');
            }


            if ($mode === 'signup') {
                if ($user) {
                    return redirect()->away($spa . '/oauth/callback?ok=0&error=user_already_exist');
                }
                $user = User::create([
                    'name' => $googleUser->getName() ?: ($googleUser->getNickname() ?: 'Google guest'),
                    'email' => $email,
                    'password' => Str::random(40),
                    'email_verified_at' => now(),
                    'google_id ' => $googleUser->getId(),
                ]);
                Auth::login($user);
                $resquest->session()->regenerate();
                $resquest->session()->regenerateToken();
                return redirect()->away($spa . '/oauth/callback?ok=1');
            }
        } catch (\Throwable $th) {
            report($th);
            if (app()->environment('local')) {
                throw $th;
            }
            $spa = rtrim(env('FRONTEND_ORIGIN', 'http://localhost:5173'), '/');
            return redirect()->away($spa . '/oauth/callback?ok=0&error=user_already_exist');
        }
    }
}
