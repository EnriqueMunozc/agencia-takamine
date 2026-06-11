@extends('layouts.app')

@section('title', 'Blog')

@section('content')

<section class="hero" style="min-height:45vh;">
    <svg class="hero-strings" aria-hidden="true">
        @for($i = 1; $i <= 12; $i++)
            <line x1="0" y1="{{ $i * 8 }}%" x2="100%" y2="{{ $i * 8 - 2 }}%"/>
        @endfor
    </svg>
    <div class="hero-content container">
        <span class="hero-eyebrow">Agencia Takamine · Blog</span>
        <h1>Notas desde<br><em>el escenario</em></h1>
        <p>Guías, consejos y novedades sobre guitarras Takamine y el regional mexicano. Escrito por músicos para músicos.</p>
    </div>
</section>

<div class="string-divider"></div>

<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="eyebrow">Artículos recientes</span>
            <h2>Lo que estamos escribiendo</h2>
        </div>
        <div class="cards-grid">
            <div class="card">
                <div class="card-icon">🎸</div>
                <h3>GJ72CE vs EF381SC: ¿cuál 12 cuerdas te conviene?</h3>
                <p>Comparamos los dos modelos más populares de Takamine para el regional mexicano. Precio, sonido, construcción y para qué escenario es cada uno.</p>
                <p style="font-size:.8rem;color:var(--texto-suave);margin-top:.75rem;">Próximamente</p>
            </div>
            <div class="card">
                <div class="card-icon">🔧</div>
                <h3>Cómo cambiar las cuerdas de una Takamine de 12 cuerdas</h3>
                <p>Paso a paso para encordar correctamente una 12 cuerdas, mantener la afinación estable y cuándo es momento de cambiar cuerdas según el uso.</p>
                <p style="font-size:.8rem;color:var(--texto-suave);margin-top:.75rem;">Próximamente</p>
            </div>
            <div class="card">
                <div class="card-icon">🌵</div>
                <h3>El norte es seco: cómo humidificar tu guitarra en México</h3>
                <p>La madera sólida de las Takamine Pro necesita humedad controlada. Aquí explicamos qué humidificadores usar y cómo proteger tu inversión en el clima norteño.</p>
                <p style="font-size:.8rem;color:var(--texto-suave);margin-top:.75rem;">Próximamente</p>
            </div>
            <div class="card">
                <div class="card-icon">🎵</div>
                <h3>Pastilla Palathetic: qué es y por qué importa</h3>
                <p>El sistema Palathetic que usa Takamine en sus modelos Pro es único. Explicamos cómo funciona y por qué suena diferente a otros sistemas de pastilla bajo el hueso.</p>
                <p style="font-size:.8rem;color:var(--texto-suave);margin-top:.75rem;">Próximamente</p>
            </div>
            <div class="card">
                <div class="card-icon">🤠</div>
                <h3>Historia de la guitarra en el norteño mexicano</h3>
                <p>De Los Alegres de Terán a los grupos actuales: el papel de la guitarra de 12 cuerdas en la evolución del norteño y cómo definió el sonido del género.</p>
                <p style="font-size:.8rem;color:var(--texto-suave);margin-top:.75rem;">Próximamente</p>
            </div>
            <div class="card">
                <div class="card-icon">📦</div>
                <h3>Qué revisar cuando recibes tu Takamine nueva</h3>
                <p>Lista de verificación para asegurarte de que tu guitarra llegó en perfectas condiciones: acción, cejilla, electrónica y afinación de fábrica.</p>
                <p style="font-size:.8rem;color:var(--texto-suave);margin-top:.75rem;">Próximamente</p>
            </div>
        </div>
    </div>
</section>

<section class="section" style="background:var(--caoba);text-align:center;">
    <div class="container">
        <span class="eyebrow">Mantente al día</span>
        <h2 style="color:var(--crema);margin:.5rem 0 1rem;">Artículos nuevos cada mes</h2>
        <p style="color:rgba(245,239,224,.7);max-width:480px;margin:0 auto 2rem;">
            Crea tu cuenta para recibir avisos de nuevos artículos y novedades del catálogo.
        </p>
        <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Crear cuenta gratis</a>
    </div>
</section>

@endsection