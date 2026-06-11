@extends('layouts.app')
@section('title', 'Error del servidor')

@section('content')
<div class="error-page">
    <div>
        <div class="error-code">500</div>
        <h2>Error interno del servidor</h2>
        <p>Algo salió mal de nuestro lado. Nuestro equipo ya fue notificado y está trabajando para solucionarlo.</p>
        <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
            <a href="{{ route('home') }}" class="btn btn-primary">Ir al inicio</a>
            <button onclick="location.reload()" class="btn btn-outline">Intentar de nuevo</button>
        </div>
        <p style="margin-top:2rem;font-size:.8rem;color:var(--slate);">
            Si el problema persiste, <a href="{{ route('contacto') }}">contáctanos</a>.
        </p>
    </div>
</div>
@endsection
