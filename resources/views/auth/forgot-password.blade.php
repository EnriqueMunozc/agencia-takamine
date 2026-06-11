@extends('layouts.app')
@section('title', 'Recuperar contraseña')

@section('content')
<div class="auth-page">
    <div class="form-card" style="max-width:420px;width:100%;">
        <h2>Recuperar contraseña</h2>
        <p class="subtitle">Te enviaremos un enlace para restablecer tu contraseña.</p>

        @if(session('status'))
            <div class="alert alert-success">
                <span>✓</span> {{ session('status') }}
                <button class="alert-close">&times;</button>
            </div>
        @endif

        <form id="form-recovery" action="{{ route('password.email') }}" method="POST" novalidate>
            @csrf

            <div class="form-group">
                <label for="email">Correo electrónico <span class="required">*</span></label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    class="form-control @error('email') is-invalid @enderror"
                    value="{{ old('email') }}"
                    placeholder="tu@correo.com"
                    required
                    autofocus
                >
                @error('email')
                    <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                @enderror
            </div>

            <!-- CAPTCHA humano -->
            <div class="captcha-box">
                <input type="checkbox" id="captcha" name="captcha" class="captcha-checkbox" required>
                <label for="captcha" class="captcha-label">No soy un robot</label>
                <div class="captcha-logo">🛡️<br>reCAPTCHA</div>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Enviar enlace de recuperación</button>
        </form>

        <div class="form-footer">
            <a href="{{ route('login') }}">← Volver a iniciar sesión</a>
        </div>
    </div>
</div>
@endsection
