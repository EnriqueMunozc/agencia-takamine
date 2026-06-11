@extends('layouts.app')
@section('title', 'Resultados de búsqueda')

@section('content')
<div class="search-page">
    <h1 style="margin-bottom:1.5rem;">Buscar en el sitio</h1>

    <div class="search-bar-big">
        <form action="{{ route('search') }}" method="GET" style="display:flex;gap:.75rem;width:100%;">
            <input type="search" name="q" class="form-control"
                value="{{ $query ?? '' }}"
                placeholder="¿Qué estás buscando?"
                autofocus>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
    </div>

    @if(isset($query) && $query)
        <p class="search-results-count">
            @if(count($results) > 0)
                Se encontraron <strong>{{ count($results) }}</strong> resultado(s) para
                "<strong>{{ $query }}</strong>"
            @else
                No se encontraron resultados para "<strong>{{ $query }}</strong>"
            @endif
        </p>

        @forelse($results as $result)
            <div class="search-result">
                <div class="result-url">{{ $result['url'] }}</div>
                <h3><a href="{{ $result['url'] }}">{{ $result['title'] }}</a></h3>
                <p>{{ $result['excerpt'] }}</p>
            </div>
        @empty
            <div style="text-align:center;padding:3rem 0;">
                <div style="font-size:3rem;margin-bottom:1rem;">🔍</div>
                <h3>Sin resultados</h3>
                <p style="color:var(--slate);margin:.75rem 0 1.5rem;">Intenta con otras palabras clave o explora el sitio.</p>
                <a href="{{ route('sitemap') }}" class="btn btn-outline">Ver mapa del sitio</a>
            </div>
        @endforelse
    @else
        <div style="text-align:center;padding:3rem 0;">
            <div style="font-size:3rem;margin-bottom:1rem;">🔎</div>
            <p style="color:var(--slate);">Escribe lo que deseas encontrar en el campo de búsqueda.</p>
        </div>
    @endif
</div>
@endsection
