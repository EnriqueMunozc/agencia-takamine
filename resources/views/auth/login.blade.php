@extends('layouts.app')
@section('title', 'Iniciar sesión')

@section('content')
<div class="auth-page">
    <div class="form-card" style="max-width:420px;width:100%;">
        <h2>Bienvenido de nuevo</h2>
        <p class="subtitle">Inicia sesión en tu cuenta DevAgency</p>

        <form id="form-login" action="{{ route('login') }}" method="POST" novalidate>
            @csrf

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
                    aria-describedby="email-error"
                >
                @error('email')
                    <div class="invalid-feedback" id="email-error" style="display:block;">{{ $message }}</div>
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
                        autocomplete="current-password"
                        placeholder="Tu contraseña"
                        required
                        aria-describedby="password-error"
                    >
                    <button type="button" class="toggle-pw" aria-label="Mostrar contraseña">👁</button>
                </div>
                @error('password')
                    <div class="invalid-feedback" id="password-error" style="display:block;">{{ $message }}</div>
                @enderror
            </div>

            <!-- Recordarme -->
            <div class="form-check">
                <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">Recordarme en este dispositivo</label>
            </div>

            <!-- CAPTCHA humano -->
            <div class="captcha-box">
                <input type="checkbox" id="captcha" name="captcha" class="captcha-checkbox" required>
                <label for="captcha" class="captcha-label">No soy un robot</label>
                <div class="captcha-logo">🛡️<br>reCAPTCHA</div>
            </div>

            @if($errors->any() && !$errors->has('email') && !$errors->has('password'))
                <div class="alert alert-error" style="margin-bottom:1rem;">
                    <span>⚠</span> {{ $errors->first() }}
                </div>
            @endif

            <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
        </form>

        <div class="divider">o continúa con</div>
        <a href="{{ route('password.request') }}" style="display:block;text-align:center;font-size:.875rem;margin-bottom:1rem;">
            ¿Olvidaste tu contraseña?
        </a>

        <div class="form-footer">
            ¿No tienes cuenta? <a href="{{ route('register') }}">Regístrate gratis</a>
        </div>
    </div>
</div>
@endsection
