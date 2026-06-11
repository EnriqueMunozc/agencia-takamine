@extends('layouts.app')
@section('title', 'Banda Sinaloense')
@section('content')

<section class="hero hero--md">
    <svg class="hero-strings" aria-hidden="true">
        @for($i = 1; $i <= 12; $i++)
            <line x1="0" y1="{{ $i * 8 }}%" x2="100%" y2="{{ $i * 8 - 2 }}%"/>
        @endfor
    </svg>
    <div class="hero-content container">
        <span class="hero-eyebrow">Regional Mexicano · Banda</span>
        <h1>Proyección entre<br><em>metales y tambora</em></h1>
        <p>La banda sinaloense es el género más exigente para una guitarra. Necesitas que se escuche. Las Takamine lo logran.</p>
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
            <span class="eyebrow">El reto de la banda</span>
            <h2>Por qué la guitarra desaparece… y cómo evitarlo</h2>
        </div>
        <div class="cards-grid">
            <div class="card">
                <div class="card-icon">🎺</div>
                <h3>Competencia con los metales</h3>
                <p>Trompetas, trombones y tuba llenan el espectro. Una guitarra con tapa laminada se pierde. La tapa sólida de las Takamine Pro proyecta en las frecuencias medias donde la guitarra tiene que vivir.</p>
            </div>
            <div class="card">
                <div class="card-icon">🥁</div>
                <h3>La tambora manda</h3>
                <p>El ataque de la tambora enmascara el bajo de la guitarra. El brillo de las cuerdas en octava de una 12 cuerdas sí se escucha por encima de la percusión.</p>
            </div>
            <div class="card">
                <div class="card-icon">🎙️</div>
                <h3>En el PA hay solución</h3>
                <p>La pastilla Palathetic de Takamine capta la resonancia real de la madera. El ingeniero de sonido lo agradece: señal limpia, sin realimentación ni ruido.</p>
            </div>
        </div>
    </div>
</section>

<div class="string-divider"></div>

<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="eyebrow">Recomendación para banda</span>
            <h2>La guitarra que corta entre los metales</h2>
        </div>
        <div class="cards-grid">
            <div class="card card--featured">
                <div class="card-icon">🏆</div>
                <h3>Takamine EF381SC-12 — La elección profesional</h3>
                <p>Tapa de abeto Sitka sólido, fondo y aros de palo de rosa, pastilla Palathetic. El modelo que usan grupos de banda sinaloense que trabajan en foros y palenques.</p>
                <ul class="card-specs">
                    <li>✓ Proyección máxima en escenario</li>
                    <li>✓ Señal limpia al PA</li>
                    <li>✓ Sin realimentación a alto volumen</li>
                    <li>✓ Estuche rígido incluido</li>
                </ul>
                <a href="{{ route('contacto') }}" class="card-link">Consultar precio →</a>
            </div>
            <div class="card">
                <div class="card-icon">⭐</div>
                <h3>Takamine GJ72CE-12 — La opción accesible</h3>
                <p>Para músicos de banda que buscan calidad sin el precio Pro. Jumbo, tapa de abeto, CT4B II. Funciona muy bien en escenarios medianos y para estudio.</p>
                <ul class="card-specs">
                    <li>✓ Cuerpo jumbo de gran volumen</li>
                    <li>✓ Afinador integrado</li>
                    <li>✓ Ideal para quien inicia en banda</li>
                    <li>✓ Excelente relación calidad-precio</li>
                </ul>
                <a href="{{ route('contacto') }}" class="card-link">Consultar precio →</a>
            </div>
        </div>
    </div>
</section>

<section class="section section-dark">
    <div class="container">
        <span class="eyebrow">Para la banda</span>
        <h2>¿Ya tienes fecha de presentación?</h2>
        <p>Escríbenos y coordinamos entrega rápida. Sabemos que los tiempos en la música no esperan.</p>
        <a href="{{ route('contacto') }}" class="btn btn-primary btn-lg">Contactar ahora</a>
    </div>
</section>

@endsection