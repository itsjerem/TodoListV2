<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use App\Http\Requests\RegisterFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(RegisterFormRequest $request)
    {
        // dd($request->all());
        // Vérifiez le reCAPTCHA
        $recaptchaResponse = $request->input('g-recaptcha-response');
        $response = file_get_contents(
            "https://www.google.com/recaptcha/api/siteverify?secret=6LeK-lopAAAAAEarZXoJhZdzGQLEqAjpVhrzUKcl&response=" . $recaptchaResponse
        );
        $response = json_decode($response);

        if ($response->success === false) {
            // Le reCAPTCHA a échoué, redirigez l'utilisateur vers la page d'inscription avec une erreur
            return back()->withErrors([
                'g-recaptcha-response' => 'La vérification reCAPTCHA a échoué. Veuillez réessayer.',
            ])->withInput();
        }

        // Le reCAPTCHA a réussi, continuez avec l'inscription
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('home');
    }

    public function login(LoginFormRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('home');
    }

    public function showRegistrationForm()
    {
        return view('user.register');
    }

    public function showLoginForm()
    {
        return view('user.login');
    }
}
