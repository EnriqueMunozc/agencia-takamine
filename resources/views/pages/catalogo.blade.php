@extends('layouts.app')
@section('title', 'Catálogo')
@section('content')

<section class="hero hero--md">
    <svg class="hero-strings" aria-hidden="true">
        @for($i = 1; $i <= 12; $i++)
            <line x1="0" y1="{{ $i * 8 }}%" x2="100%" y2="{{ $i * 8 - 2 }}%"/>
        @endfor
    </svg>
    <div class="hero-content container">
        <span class="hero-eyebrow">Catálogo completo</span>
        <h1>Elige tu<br><em>instrumento</em></h1>
        <p>Guitarras Takamine de 6 y 12 cuerdas, más accesorios seleccionados para el regional mexicano.</p>
    </div>
    <div class="hero-badge">
        <span class="badge-num">12</span>
        <span class="badge-label">cuerdas</span>
    </div>
</section>

<div class="string-divider"></div>

<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="eyebrow">¿Qué buscas?</span>
            <h2>Explora por categoría</h2>
        </div>
        <div class="cards-grid">
            <div class="card">
                <div class="card-icon">🎸</div>
                <h3>Guitarras de 12 cuerdas</h3>
                <p>La firma del regional mexicano. Modelos GJ72CE, EF381SC y más. Para norteño, banda y ranchero profesional.</p>
                <a href="{{ route('catalogo.12cuerdas') }}" class="card-link">Ver guitarras de 12 cuerdas →</a>
            </div>
            <div class="card">
                <div class="card-icon">🎶</div>
                <h3>Guitarras de 6 cuerdas</h3>
                <p>Takamine acústicas y electroacústicas de 6 cuerdas. Para solistas, ranchero íntimo y composición.</p>
                <a href="{{ route('catalogo.6cuerdas') }}" class="card-link">Ver guitarras de 6 cuerdas →</a>
            </div>
            <div class="card">
                <div class="card-icon">🎒</div>
                <h3>Accesorios</h3>
                <p>Estuches rígidos, correas, cuerdas de repuesto, afinadores y más. Todo lo que necesita tu Takamine.</p>
                <a href="{{ route('catalogo.accesorios') }}" class="card-link">Ver accesorios →</a>
            </div>
        </div>
    </div>
</section>

<div class="string-divider"></div>

<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <span class="eyebrow">Nuestra selección</span>
            <h2>Solo los modelos que conocemos</h2>
            <p>No vendemos todo el catálogo Takamine. Seleccionamos los modelos que hemos probado en tarimas reales y que sabemos que funcionan para el regional mexicano.</p>
        </div>
        <div class="stats-row">
            <div class="stat-item">
                <div class="stat-number">GJ72CE</div>
                <div class="stat-label">El estándar del norteño</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">EF381SC</div>
                <div class="stat-label">Para banda y escenario grande</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">GD30CE</div>
                <div class="stat-label">6 cuerdas versátil</div>
            </div>
        </div>
    </div>
</section>

<section class="section section-dark">
    <div class="container">
        <span class="eyebrow">¿Tienes dudas?</span>
        <h2>Te ayudamos a elegir</h2>
        <p>Cuéntanos qué género tocas, tu presupuesto y dónde actúas. Te recomendamos el modelo exacto.</p>
        <a href="{{ route('contacto') }}" class="btn btn-primary btn-lg">Consultar ahora</a>
    </div>
</section>

@endsection