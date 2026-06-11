@extends('layouts.app')
@section('title', 'Guitarras de 12 Cuerdas')
@section('content')

<section class="hero hero--md">
    <svg class="hero-strings" aria-hidden="true">
        @for($i = 1; $i <= 12; $i++)
            <line x1="0" y1="{{ $i * 8 }}%" x2="100%" y2="{{ $i * 8 - 2 }}%"/>
        @endfor
    </svg>
    <div class="hero-content container">
        <span class="hero-eyebrow">Catálogo · 12 cuerdas</span>
        <h1>El sonido<br><em>del regional</em></h1>
        <p>Las guitarras de 12 cuerdas Takamine son el corazón del norteño, la banda y el ranchero. Aquí están los modelos que usamos y recomendamos.</p>
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
            <span class="eyebrow">El instrumento del género</span>
            <h2>¿Por qué 12 cuerdas para el regional?</h2>
            <p>El coro natural de seis pares de cuerdas crea un sonido más amplio, con más brillo y sustain. Es lo que distingue a una bandota de un guitarrista ordinario.</p>
        </div>
        <div class="cards-grid">
            <div class="card">
                <div class="card-icon">🔊</div>
                <h3>Volumen natural</h3>
                <p>Las 12 cuerdas generan el doble de vibración sobre la tapa. En tarima, proyecta sin necesidad de empujar el amplificador.</p>
            </div>
            <div class="card">
                <div class="card-icon">✨</div>
                <h3>Brillo inconfundible</h3>
                <p>Las cuerdas en octava añaden ese brillo cristalino que el norteño exige y que ninguna guitarra de 6 cuerdas puede replicar.</p>
            </div>
            <div class="card">
                <div class="card-icon">🎵</div>
                <h3>Sustain y cuerpo</h3>
                <p>El sonido no corta: sostiene. Fundamental para los rasgueos largos del ranchero y los arpegios de la banda sinaloense.</p>
            </div>
        </div>
    </div>
</section>

<div class="string-divider"></div>

<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="eyebrow">Modelos disponibles</span>
            <h2>Guitarras de 12 cuerdas Takamine</h2>
        </div>
        <div class="cards-grid">
            <div class="card card--featured">
                <div class="card-icon">⭐</div>
                <h3>Takamine GJ72CE-12 NAT</h3>
                <p><strong>El más popular del norteño.</strong> Cuerpo jumbo, tapa de abeto sólido, aros y fondo de caoba. Sistema CT4B II con afinador integrado.</p>
                <ul class="card-specs">
                    <li>Tapa: Abeto Sitka sólido</li>
                    <li>Cuerpo: Jumbo · Cuerdas: 12</li>
                    <li>Electrónica: CT4B II</li>
                    <li>Acabado: Natural brillante</li>
                </ul>
                <a href="{{ route('contacto') }}" class="card-link">Consultar precio →</a>
            </div>
            <div class="card">
                <div class="card-icon">🏆</div>
                <h3>Takamine EF381SC-12</h3>
                <p><strong>Para el escenario grande.</strong> Serie Pro con tapa de abeto Sitka sólido, fondo y aros de palo de rosa. Pastilla Palathetic bajo el hueso.</p>
                <ul class="card-specs">
                    <li>Tapa: Abeto Sitka sólido</li>
                    <li>Fondo/Aros: Palo de rosa</li>
                    <li>Electrónica: Palathetic + CTP-2</li>
                    <li>Estuche rígido incluido</li>
                </ul>
                <a href="{{ route('contacto') }}" class="card-link">Consultar precio →</a>
            </div>
            <div class="card">
                <div class="card-icon">🎸</div>
                <h3>Takamine GD30CE-12 BLK</h3>
                <p><strong>La opción negra para la banda.</strong> Cuerpo dreadnought, acabado negro brillante, gran presencia visual en tarima. CT4B II con ecualizador de 3 bandas.</p>
                <ul class="card-specs">
                    <li>Tapa: Abeto laminado</li>
                    <li>Cuerpo: Dreadnought · 12 cuerdas</li>
                    <li>Electrónica: CT4B II</li>
                    <li>Acabado: Negro brillante</li>
                </ul>
                <a href="{{ route('contacto') }}" class="card-link">Consultar precio →</a>
            </div>
        </div>
    </div>
</section>

<section class="section section-dark">
    <div class="container">
        <span class="eyebrow">Agenda tu prueba</span>
        <h2>¿Quieres escucharla antes de decidir?</h2>
        <p>Contáctanos y te mandamos demos en audio real de cada modelo con los géneros que tocas.</p>
        <a href="{{ route('contacto') }}" class="btn btn-primary btn-lg">Solicitar demo</a>
    </div>
</section>

@endsection