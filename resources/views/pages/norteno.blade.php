@extends('layouts.app')
@section('title', 'Norteño')
@section('content')

<section class="hero hero--md">
    <svg class="hero-strings" aria-hidden="true">
        @for($i = 1; $i <= 12; $i++)
            <line x1="0" y1="{{ $i * 8 }}%" x2="100%" y2="{{ $i * 8 - 2 }}%"/>
        @endfor
    </svg>
    <div class="hero-content container">
        <span class="hero-eyebrow">Regional Mexicano · Norteño</span>
        <h1>El rasgueo<br><em>que nació en el norte</em></h1>
        <p>La música norteña exige una guitarra con carácter: volumen, cuerpo y un brillo de 12 cuerdas que corte el aire del baile.</p>
        <div class="hero-actions">
            <a href="{{ route('catalogo.12cuerdas') }}" class="btn btn-primary btn-lg">Ver guitarras de 12 cuerdas</a>
            <a href="{{ route('contacto') }}" class="btn btn-ghost btn-lg">Consultar disponibilidad</a>
        </div>
    </div>
    <div class="hero-badge">
        <span class="badge-num">12</span>
        <span class="badge-label">cuerdas</span>
    </div>
</section>

<div class="string-divider"></div>

<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <span class="eyebrow">El sonido del norteño</span>
            <h2>Qué necesita una guitarra norteña</h2>
        </div>
        <div class="cards-grid">
            <div class="card">
                <div class="card-icon">💪</div>
                <h3>Cuerpo jumbo</h3>
                <p>El volumen natural importa. En el norteño la guitarra compite con el acordeón y el bajo sexto, y necesita un cuerpo grande que proyecte sin amplificación excesiva.</p>
            </div>
            <div class="card">
                <div class="card-icon">🔊</div>
                <h3>Ataque rápido</h3>
                <p>Los rasgueos del norteño son rápidos y percutivos. La tapa de abeto Sitka sólido de las Takamine responde con ataque inmediato y sin muddiness.</p>
            </div>
            <div class="card">
                <div class="card-icon">🎵</div>
                <h3>12 cuerdas siempre</h3>
                <p>No hay norteño serio con 6 cuerdas. El coro de las cuerdas octavadas es parte del ADN sonoro del género, desde Los Tigres hasta los grupos de hoy.</p>
            </div>
        </div>
    </div>
</section>

<div class="string-divider"></div>

<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="eyebrow">Recomendación</span>
            <h2>La guitarra para el norteño</h2>
            <p>Después de años probando modelos con músicos norteños, hay un ganador claro.</p>
        </div>
        <div class="cards-grid">
            <div class="card card--featured">
                <div class="card-icon">⭐</div>
                <h3>Takamine GJ72CE-12 — El estándar</h3>
                <p>Cuerpo jumbo, tapa de abeto Sitka sólido, aros y fondo de caoba. El sistema CT4B II con afinador integrado lo hace plug-and-play en cualquier tarima.</p>
                <ul class="card-specs">
                    <li>✓ Volumen natural superior</li>
                    <li>✓ Ataque claro y definido</li>
                    <li>✓ Afinador en el cuerpo</li>
                    <li>✓ Resistente al viaje y la gira</li>
                </ul>
                <a href="{{ route('contacto') }}" class="card-link">Consultar precio y disponibilidad →</a>
            </div>
            <div class="card">
                <div class="card-icon">🏆</div>
                <h3>Takamine EF381SC-12 — Para el escenario grande</h3>
                <p>Cuando el norteño toca en foros y palenques. Tapa y fondo sólidos, pastilla Palathetic que capta la madera real. Sonido que escalan los ingenieros en festivales.</p>
                <ul class="card-specs">
                    <li>✓ Palo de rosa en fondo y aros</li>
                    <li>✓ Pastilla Palathetic bajo hueso</li>
                    <li>✓ Estuche rígido incluido</li>
                    <li>✓ Calidad de grabación en vivo</li>
                </ul>
                <a href="{{ route('contacto') }}" class="card-link">Consultar precio y disponibilidad →</a>
            </div>
        </div>
    </div>
</section>

<section class="section section-dark">
    <div class="container">
        <span class="eyebrow">Norteño de corazón</span>
        <h2>¿Tienes tu grupo formado?</h2>
        <p>Pregunta por precios especiales para grupos que necesitan más de una guitarra. Estamos para apoyar el género.</p>
        <a href="{{ route('contacto') }}" class="btn btn-primary btn-lg">Hablar con nosotros</a>
    </div>
</section>

@endsection