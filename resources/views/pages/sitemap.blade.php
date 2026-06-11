@extends('layouts.app')
@section('title', 'Mapa del sitio')

@section('content')
<div class="sitemap-section container">
    <div class="section-header" style="text-align:left;margin-bottom:2.5rem;">
        <span class="eyebrow">Navegación</span>
        <h1>Mapa del sitio</h1>
        <p style="color:var(--slate);">Todas las secciones de Agencia Takamine en un solo lugar.</p>
    </div>

    <div class="sitemap-grid">
        <div class="sitemap-col">
            <h3>Inicio</h3>
            <ul>
                <li><a href="{{ route('home') }}">Página principal</a></li>
            </ul>
        </div>

        <div class="sitemap-col">
            <h3>Catálogo</h3>
            <ul>
                <li><a href="{{ route('catalogo') }}">Todos los modelos</a></li>
                <ul class="sitemap-subsection">
                    <li><a href="{{ route('catalogo.12cuerdas') }}">Guitarras de 12 cuerdas</a></li>
                    <li><a href="{{ route('catalogo.6cuerdas') }}">Guitarras de 6 cuerdas</a></li>
                    <li><a href="{{ route('catalogo.accesorios') }}">Accesorios</a></li>
                </ul>
            </ul>
        </div>

        <div class="sitemap-col">
            <h3>Regional Mexicano</h3>
            <ul>
                <li><a href="{{ route('regional') }}">Géneros</a></li>
                <ul class="sitemap-subsection">
                    <li><a href="{{ route('regional.norteno') }}">Norteño</a></li>
                    <li><a href="{{ route('regional.banda') }}">Banda sinaloense</a></li>
                    <li><a href="{{ route('regional.ranchero') }}">Ranchero</a></li>
                </ul>
            </ul>
        </div>

        <div class="sitemap-col">
            <h3>Empresa</h3>
            <ul>
                <li><a href="{{ route('nosotros') }}">Nosotros</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
            </ul>
        </div>

        <div class="sitemap-col">
            <h3>Mi cuenta</h3>
            <ul>
                <li><a href="{{ route('register') }}">Registrarse</a></li>
                <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
                <li><a href="{{ route('password.request') }}">Recuperar contraseña</a></li>
                <li><a href="{{ route('buzon') }}">Buzón de mensajes</a></li>
            </ul>
        </div>

        <div class="sitemap-col">
            <h3>Soporte</h3>
            <ul>
                <li><a href="{{ route('ayuda') }}">Centro de ayuda</a></li>
                <li><a href="{{ route('contacto') }}">Contáctanos</a></li>
                <li><a href="{{ route('sitemap') }}">Mapa del sitio</a></li>
                <li><a href="#chat-widget">Chat en vivo</a></li>
                <li><a href="{{ route('search') }}">Búsqueda</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
