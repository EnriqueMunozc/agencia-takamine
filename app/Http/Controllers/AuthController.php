<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Services\UserValidator;

/**
 * AuthController — Maneja registro, login y cierre de sesión.
 * Usa UserValidator (servicio OOP) para la validación del backend.
 */
class AuthController extends Controller
{
    // ── Registro ────────────────────────────────────────────────────

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validación CAPTCHA humano (validación de usuario humano)
        if (!$request->boolean('captcha')) {
            return back()
                ->withInput()
                ->withErrors(['captcha' => 'Por favor confirma que no eres un robot.']);
        }

        // Validación Backend con nuestro servicio OOP
        $validator = new UserValidator($request->all());
        $validator
            ->required('name', 'Nombre')
            ->noScript('name', 'Nombre')
            ->maxLength('name', 100, 'Nombre')
            ->required('email', 'Correo')
            ->email('email')
            ->required('password', 'Contraseña')
            ->minLength('password', 8, 'Contraseña')
            ->strongPassword('password')
            ->required('password_confirmation', 'Confirmar contraseña')
            ->matches('password_confirmation', 'password', 'Confirmar contraseña');

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->getErrors());
        }

        // Validación de unicidad de email (backend Laravel)
        $request->validate([
            'email' => ['unique:users,email'],
        ], ['email.unique' => 'Este correo ya está registrado.']);

        // Crear usuario
        $user = User::create([
            'name'     => strip_tags(trim($request->name)),
            'email'    => strtolower(trim($request->email)),
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('home')
            ->with('success', '¡Bienvenido a DevAgency, ' . $user->name . '!');
    }

    // ── Login ───────────────────────────────────────────────────────

    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validación CAPTCHA
        if (!$request->boolean('captcha')) {
            return back()
                ->withInput()
                ->withErrors(['captcha' => 'Por favor confirma que no eres un robot.']);
        }

        // Validación backend
        $validator = new UserValidator($request->all());
        $validator
            ->required('email', 'Correo')
            ->email('email')
            ->required('password', 'Contraseña');

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->getErrors());
        }

        $credentials = [
            'email'    => strtolower(trim($request->email)),
            'password' => $request->password,
        ];

        if (!Auth::attempt($credentials, $request->boolean('remember'))) {
            return back()
                ->withInput(['email' => $request->email])
                ->withErrors(['email' => 'Correo o contraseña incorrectos.']);
        }

        $request->session()->regenerate();

        return redirect()->intended(route('home'))
            ->with('success', 'Sesión iniciada correctamente.');
    }

    // ── Logout ──────────────────────────────────────────────────────

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home')
            ->with('success', 'Sesión cerrada correctamente.');
    }
}
