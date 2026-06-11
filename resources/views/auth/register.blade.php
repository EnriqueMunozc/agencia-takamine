@extends('layouts.app')
@section('title', 'Crear cuenta')

@section('content')
<div class="auth-page">
    <div class="form-card" style="max-width:500px;width:100%;">
        <h2>Crear cuenta</h2>
        <p class="subtitle">Únete a DevAgency — es gratis</p>

        <form id="form-register" action="{{ route('register') }}" method="POST" novalidate>
            @csrf

            <!-- Nombre -->
            <div class="form-group">
                <label for="name">Nombre completo <span class="required">*</span></label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    class="form-control @error('name') is-invalid @enderror"
                    value="{{ old('name') }}"
                    autocomplete="name"
                    placeholder="Juan Pérez"
                    required
                    minlength="2"
                    maxlength="100"
                >
                @error('name')
                    <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Correo electrónico <span class="required">*</span></label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    class="form-control @error('email') is-invalid @enderror"
                    value="{{ old('email') }}"
                    autocomplete="email"
                    placeholder="tu@correo.com"
                    required
                >
                @error('email')
                    <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                @enderror
            </div>

            <!-- Contraseña -->
            <div class="form-group">
                <label for="password">Contraseña <span class="required">*</span></label>
                <div class="password-toggle">
                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="form-control @error('password') is-invalid @enderror"
                        autocomplete="new-password"
                        placeholder="Mínimo 8 caracteres"
                        required
                        minlength="8"
                    >
                    <button type="button" class="toggle-pw" aria-label="Mostrar contraseña">👁</button>
                </div>
                <!-- Indicador de fortaleza -->
                <div class="pw-strength">
                    <div class="pw-strength-bar">
                        <div class="pw-strength-fill" id="pw-fill"></div>
                    </div>
                    <div class="pw-strength-text" id="pw-text"></div>
                </div>
                @error('password')
                    <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                @enderror
            </div>

            <!-- Confirmar contraseña -->
            <div class="form-group">
                <label for="password_confirmation">Confirmar contraseña <span class="required">*</span></label>
                <div class="password-toggle">
                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        class="form-control"
                        autocomplete="new-password"
                        placeholder="Repite tu contraseña"
                        required
                    >
                    <button type="button" class="toggle-pw" aria-label="Mostrar contraseña">👁</button>
                </div>
            </div>

            <!-- Términos -->
            <div class="form-check">
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms">
                    Acepto los <a href="#" target="_blank">Términos de servicio</a>
                    y la <a href="#" target="_blank">Política de privacidad</a>
                    <span class="required">*</span>
                </label>
            </div>

            <!-- CAPTCHA humano -->
            <div class="captcha-box">
                <input type="checkbox" id="captcha" name="captcha" class="captcha-checkbox" required>
                <label for="captcha" class="captcha-label">No soy un robot</label>
                <div class="captcha-logo">🛡️<br>reCAPTCHA</div>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Crear mi cuenta</button>
        </form>

        <div class="form-footer">
            ¿Ya tienes cuenta? <a href="{{ route('login') }}">Iniciar sesión</a>
        </div>
    </div>
</div>
@endsection
