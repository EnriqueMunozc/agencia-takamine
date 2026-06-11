@extends('layouts.app')
@section('title', 'Regional Mexicano')
@section('content')

<section class="hero hero--md">
    <svg class="hero-strings" aria-hidden="true">
        @for($i = 1; $i <= 12; $i++)
            <line x1="0" y1="{{ $i * 8 }}%" x2="100%" y2="{{ $i * 8 - 2 }}%"/>
        @endfor
    </svg>
    <div class="hero-content container">
        <span class="hero-eyebrow">Por género</span>
        <h1>El alma del<br><em>regional mexicano</em></h1>
        <p>Cada subgénero tiene su propio carácter sonoro. Aquí encontrarás la guitarra Takamine que encaja exactamente con lo que tocas.</p>
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
            <span class="eyebrow">¿Qué estilo tocas?</span>
            <h2>Explora por género</h2>
            <p>El norteño, la banda y el ranchero comparten raíces pero piden instrumentos con características distintas.</p>
        </div>
        <div class="cards-grid">
            <div class="card">
                <div class="card-icon">🤠</div>
                <h3>Norteño</h3>
                <p>El rasgueo fuerte, los acordes abiertos y el ritmo sincopado del norteño exigen una 12 cuerdas con mucho volumen y cuerpo jumbo. La Takamine GJ72CE es el estándar del género.</p>
                <a href="{{ route('regional.norteno') }}" class="card-link">Ver guitarras para norteño →</a>
            </div>
            <div class="card">
                <div class="card-icon">🎺</div>
                <h3>Banda sinaloense</h3>
                <p>La guitarra tiene que cortar entre metales y percusión. La proyección natural de las Takamine Pro con tapa sólida logra que la guitarra se escuche sin pelear con el volumen de la banda.</p>
                <a href="{{ route('regional.banda') }}" class="card-link">Ver guitarras para banda →</a>
            </div>
            <div class="card">
                <div class="card-icon">🌵</div>
                <h3>Ranchero</h3>
                <p>El corrido ranchero pide calor, profundidad y melancolía. Los aros y fondo de caoba de la Takamine dan ese tono gordo y expresivo que define a los grandes guitarristas del género.</p>
                <a href="{{ route('regional.ranchero') }}" class="card-link">Ver guitarras para ranchero →</a>
            </div>
        </div>
    </div>
</section>

<div class="string-divider"></div>

<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <span class="eyebrow">Lo que nos diferencia</span>
            <h2>Conocemos el género desde adentro</h2>
        </div>
        <div class="stats-row">
            <div class="stat-item">
                <div class="stat-number">3</div>
                <div class="stat-label">Géneros principales cubiertos</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">12</div>
                <div class="stat-label">Cuerdas que definen el sonido</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">100%</div>
                <div class="stat-label">Enfocados en regional mexicano</div>
            </div>
        </div>
    </div>
</section>

@endsection