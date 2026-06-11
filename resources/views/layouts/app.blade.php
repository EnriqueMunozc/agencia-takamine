<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Agencia Takamine') | Agencia Takamine</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
</head>
<body>

<!-- ===== NAVBAR ===== -->
<nav class="navbar" id="main-nav" aria-label="Navegación principal">

    <!-- ID del sitio -->
    <a href="{{ route('home') }}" class="nav-brand" aria-label="Agencia Takamine - Inicio">
        <span class="brand-icon">♪</span>
        <span class="brand-name">Agencia Takamine</span>
    </a>

    <!-- Búsqueda -->
    <div class="nav-search" role="search">
        <form action="{{ route('search') }}" method="GET">
            <input type="search" name="q" placeholder="Buscar guitarras..."
                value="{{ request('q') }}" aria-label="Buscar en el sitio" class="search-input">
            <button type="submit" class="search-btn" aria-label="Buscar">⌕</button>
        </form>
    </div>

    <!-- Secciones principales -->
    <ul class="nav-links" role="list">
        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Inicio</a></li>

        <li class="nav-dropdown">
            <a href="{{ route('catalogo') }}" class="{{ request()->routeIs('catalogo*') ? 'active' : '' }}">
                Catálogo ▾
            </a>
            <ul class="dropdown-menu" role="list">
                <li><a href="{{ route('catalogo.12cuerdas') }}">Guitarras de 12 cuerdas</a></li>
                <li><a href="{{ route('catalogo.6cuerdas') }}">Guitarras de 6 cuerdas</a></li>
                <li><a href="{{ route('catalogo.accesorios') }}">Accesorios</a></li>
            </ul>
        </li>

        <li class="nav-dropdown">
            <a href="{{ route('regional') }}" class="{{ request()->routeIs('regional*') ? 'active' : '' }}">
                Regional Mexicano ▾
            </a>
            <ul class="dropdown-menu" role="list">
                <li><a href="{{ route('regional.norteno') }}">Norteño</a></li>
                <li><a href="{{ route('regional.banda') }}">Banda</a></li>
                <li><a href="{{ route('regional.ranchero') }}">Ranchero</a></li>
            </ul>
        </li>

        <li><a href="{{ route('nosotros') }}" class="{{ request()->routeIs('nosotros*') ? 'active' : '' }}">Nosotros</a></li>
        <li><a href="{{ route('blog') }}" class="{{ request()->routeIs('blog') ? 'active' : '' }}">Blog</a></li>
        <li><a href="{{ route('contacto') }}" class="{{ request()->routeIs('contacto') ? 'active' : '' }}">Contacto</a></li>
    </ul>

    <!-- Elementos adicionales -->
    <div class="nav-extras">
        @auth
            <a href="{{ route('buzon') }}" class="nav-icon-btn" aria-label="Buzón" title="Buzón">✉</a>
            <div class="nav-dropdown user-menu">
                <button class="nav-icon-btn user-btn" aria-label="Menú de usuario">
                    {{ substr(auth()->user()->name, 0, 1) }}
                </button>
                <ul class="dropdown-menu dropdown-right" role="list">
                    <li><a href="{{ route('perfil') }}">Mi perfil</a></li>
                    <li><a href="{{ route('buzon') }}">Buzón</a></li>
                    <li><a href="{{ route('ayuda') }}">Ayuda</a></li>
                    <li class="divider"></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn-link-danger">Cerrar sesión</button>
                        </form>
                    </li>
                </ul>
            </div>
        @else
            <a href="{{ route('login') }}" class="btn btn-ghost">Iniciar sesión</a>
            <a href="{{ route('register') }}" class="btn btn-primary">Registrarse</a>
        @endauth

        <button class="hamburger" id="hamburger" aria-label="Abrir menú" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
    </div>
</nav>

<!-- ===== CONTENIDO ===== -->
<main id="main-content">
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            <span>✓</span> {{ session('success') }}
            <button class="alert-close" aria-label="Cerrar">&times;</button>
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-error" role="alert">
            <span>⚠</span> {{ session('error') }}
            <button class="alert-close" aria-label="Cerrar">&times;</button>
        </div>
    @endif

    @yield('content')
</main>

<!-- ===== FOOTER ===== -->
<footer class="footer">
    <div class="footer-grid">
        <div class="footer-brand">
            <span class="brand-icon">♪</span>
            <span class="brand-name" style="font-family:var(--font-display);font-size:1.1rem;"> Agencia Takamine</span>
            <p>Especialistas en guitarras Takamine para el regional mexicano. Tradición, calidad y sonido en cada cuerda.</p>
        </div>
        <div class="footer-links">
            <h4>Catálogo</h4>
            <ul>
                <li><a href="{{ route('catalogo.12cuerdas') }}">Guitarras 12 cuerdas</a></li>
                <li><a href="{{ route('catalogo.6cuerdas') }}">Guitarras 6 cuerdas</a></li>
                <li><a href="{{ route('catalogo.accesorios') }}">Accesorios</a></li>
            </ul>
        </div>
        <div class="footer-links">
            <h4>Géneros</h4>
            <ul>
                <li><a href="{{ route('regional.norteno') }}">Norteño</a></li>
                <li><a href="{{ route('regional.banda') }}">Banda</a></li>
                <li><a href="{{ route('regional.ranchero') }}">Ranchero</a></li>
            </ul>
        </div>
        <div class="footer-links">
            <h4>Soporte</h4>
            <ul>
                <li><a href="{{ route('ayuda') }}">Ayuda</a></li>
                <li><a href="{{ route('contacto') }}">Contáctanos</a></li>
                <li><a href="{{ route('sitemap') }}">Mapa del sitio</a></li>
                <li><a href="{{ route('password.request') }}">Recuperar contraseña</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; {{ date('Y') }} Agencia Takamine. Todos los derechos reservados.</p>
        <div class="footer-bottom-links">
            <a href="#">Privacidad</a>
            <a href="#">Términos</a>
            <a href="{{ route('sitemap') }}">Mapa del sitio</a>
        </div>
    </div>
</footer>

<!-- ===== CHAT ===== -->
<div class="chat-widget" id="chat-widget">
    <button class="chat-toggle" id="chat-toggle" aria-label="Abrir chat">
        <span class="chat-icon">♪</span>
        <span class="chat-label">Chat</span>
    </button>
    <div class="chat-box" id="chat-box" aria-live="polite" role="dialog" aria-label="Chat de soporte">
        <div class="chat-header">
            <span>Soporte Agencia Takamine</span>
            <button id="chat-close" aria-label="Cerrar chat">&times;</button>
        </div>
        <div class="chat-messages" id="chat-messages">
            <div class="chat-msg bot">
                <p>¡Buenas! ¿Buscas una Takamine de 12 cuerdas para tu regional? Te ayudo.</p>
            </div>
        </div>
        <div class="chat-input-area">
            <input type="text" id="chat-input" placeholder="Escribe tu pregunta..." aria-label="Mensaje">
            <button id="chat-send" aria-label="Enviar">➤</button>
        </div>
    </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')
</body>
</html>
