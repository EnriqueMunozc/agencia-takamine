@extends('layouts.app')
@section('title', 'Página no encontrada')

@section('content')
<div class="error-page">
    <div>
        <div class="error-code">404</div>
        <h2>Esta cuerda no suena</h2>
        <p>La página que buscas no existe o fue movida. Revisa la URL o regresa al catálogo.</p>
        <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
            <a href="{{ route('home') }}" class="btn btn-primary">Ir al inicio</a>
            <a href="{{ route('catalogo') }}" class="btn btn-ghost">Ver catálogo</a>
            <button onclick="history.back()" class="btn btn-ghost">← Volver</button>
        </div>
        <div style="margin-top:3rem;padding:1.5rem;background:rgba(245,239,224,.06);border-radius:var(--radius-lg);max-width:420px;margin-left:auto;margin-right:auto;border:1px solid rgba(200,132,42,.15);">
            <p style="font-size:.9rem;color:rgba(245,239,224,.6);margin-bottom:.75rem;">¿Buscabas algún modelo?</p>
            <form action="{{ route('search') }}" method="GET" style="display:flex;gap:.5rem;">
                <input type="search" name="q" placeholder="Ej: GJ72CE, 12 cuerdas..."
                    class="search-input" style="flex:1;padding:.6rem .9rem;border-radius:var(--radius);">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </form>
        </div>
    </div>
</div>
@endsection
