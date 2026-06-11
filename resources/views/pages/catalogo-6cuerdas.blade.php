@extends('layouts.app')
@section('title', 'Guitarras de 6 Cuerdas')
@section('content')

<section class="hero hero--md">
    <svg class="hero-strings" aria-hidden="true">
        @for($i = 1; $i <= 12; $i++)
            <line x1="0" y1="{{ $i * 8 }}%" x2="100%" y2="{{ $i * 8 - 2 }}%"/>
        @endfor
    </svg>
    <div class="hero-content container">
        <span class="hero-eyebrow">Catálogo · 6 cuerdas</span>
        <h1>Claridad y<br><em>versatilidad</em></h1>
        <p>Para el solista, el compositor y el guitarrista que necesita precisión melódica en el regional mexicano.</p>
    </div>
    <div class="hero-badge">
        <span class="badge-num">6</span>
        <span class="badge-label">cuerdas</span>
    </div>
</section>

<div class="string-divider"></div>

<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <span class="eyebrow">¿Para quién es una 6 cuerdas?</span>
            <h2>Precisión para el ranchero y el corrido</h2>
            <p>La guitarra de 6 cuerdas es perfecta para quienes priorizan la melodía, el solo y la composición. Más enfocada, más directa, más íntima.</p>
        </div>
        <div class="cards-grid">
            <div class="card">
                <div class="card-icon">🎼</div>
                <h3>Para solistas</h3>
                <p>La 6 cuerdas responde con más claridad en las notas individuales. Ideal para quienes llevan la melodía principal en el conjunto.</p>
            </div>
            <div class="card">
                <div class="card-icon">✍️</div>
                <h3>Para compositores</h3>
                <p>Escribir y grabar demos es más natural en 6 cuerdas. La digitación es más accesible para desarrollar ideas nuevas rápidamente.</p>
            </div>
            <div class="card">
                <div class="card-icon">🌵</div>
                <h3>Para el ranchero íntimo</h3>
                <p>En corridos y rancheras acústicas, la 6 cuerdas tiene la calidez y el cuerpo justos para acompañar la voz sin saturar.</p>
            </div>
        </div>
    </div>
</section>

<div class="string-divider"></div>

<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="eyebrow">Modelos disponibles</span>
            <h2>Guitarras de 6 cuerdas Takamine</h2>
        </div>
        <div class="cards-grid">
            <div class="card card--featured">
                <div class="card-icon">⭐</div>
                <h3>Takamine GD30CE NAT</h3>
                <p><strong>La dreadnought esencial.</strong> Cuerpo dreadnought, tapa de abeto laminado, aros y fondo de caoba. CT4B II. Relación calidad-precio imbatible.</p>
                <ul class="card-specs">
                    <li>Tapa: Abeto laminado</li>
                    <li>Cuerpo: Dreadnought</li>
                    <li>Electrónica: CT4B II</li>
                    <li>Acabado: Natural</li>
                </ul>
                <a href="{{ route('contacto') }}" class="card-link">Consultar precio →</a>
            </div>
            <div class="card">
                <div class="card-icon">🏆</div>
                <h3>Takamine EF341SC</h3>
                <p><strong>Serie Pro para profesionales.</strong> Tapa de abeto Sitka sólido, fondo y aros de caoba sólida. Pastilla Palathetic. El salto definitivo en sonido.</p>
                <ul class="card-specs">
                    <li>Tapa: Abeto Sitka sólido</li>
                    <li>Fondo/Aros: Caoba sólida</li>
                    <li>Electrónica: Palathetic + CTP-2</li>
                    <li>Estuche rígido incluido</li>
                </ul>
                <a href="{{ route('contacto') }}" class="card-link">Consultar precio →</a>
            </div>
            <div class="card">
                <div class="card-icon">🎸</div>
                <h3>Takamine GN93CE NAT</h3>
                <p><strong>Cuerpo NEX para mayor comodidad.</strong> Entre dreadnought y cutaway, fondo de palo de rosa sintético. Más acceso a los trastes altos.</p>
                <ul class="card-specs">
                    <li>Tapa: Abeto laminado</li>
                    <li>Cuerpo: NEX con cutaway</li>
                    <li>Electrónica: CT4B II</li>
                    <li>Fondo: Palo de rosa sint.</li>
                </ul>
                <a href="{{ route('contacto') }}" class="card-link">Consultar precio →</a>
            </div>
        </div>
    </div>
</section>

<section class="section section-dark">
    <div class="container">
        <span class="eyebrow">¿12 o 6 cuerdas?</span>
        <h2>No sé cuál me conviene más</h2>
        <p>Cuéntanos qué tocas y en qué contexto. Te decimos con honestidad cuál modelo se adapta mejor a ti.</p>
        <a href="{{ route('contacto') }}" class="btn btn-primary btn-lg">Pedir asesoría</a>
    </div>
</section>

@endsection