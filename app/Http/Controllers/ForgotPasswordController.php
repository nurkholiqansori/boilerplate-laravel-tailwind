<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    protected function show(Request $request)
    {
        if ($request->query('token') && $request->query('email')) {
            $email = $request->query('email');
            $token = $request->query('token');

            return view('auth.passwords.reset')->with(compact('email', 'token'));
        } else {
            return view('auth.passwords.index');
        }
    }

    protected function reset(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with('success', 'Link reset password telah dikirim ke email anda.')
            : back()->withErrors(['email' => __($status)]);
    }

    public function resetpassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login.index')->with('success', 'Password berhasil direset. Silahkan login kembali.')
            : back()->withErrors(['email' => [__($status)]]);
    }
}
