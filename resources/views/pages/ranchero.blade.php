@extends('layouts.app')
@section('title', 'Ranchero')
@section('content')

<section class="hero hero--md">
    <svg class="hero-strings" aria-hidden="true">
        @for($i = 1; $i <= 12; $i++)
            <line x1="0" y1="{{ $i * 8 }}%" x2="100%" y2="{{ $i * 8 - 2 }}%"/>
        @endfor
    </svg>
    <div class="hero-content container">
        <span class="hero-eyebrow">Regional Mexicano · Ranchero</span>
        <h1>El calor<br><em>del corrido</em></h1>
        <p>El ranchero pide madera, calidez y melancolía. La caoba de las Takamine entrega exactamente eso.</p>
        <div class="hero-actions">
            <a href="{{ route('catalogo.12cuerdas') }}" class="btn btn-primary btn-lg">Ver guitarras de 12 cuerdas</a>
            <a href="{{ route('catalogo.6cuerdas') }}" class="btn btn-ghost btn-lg">Ver guitarras de 6 cuerdas</a>
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
            <span class="eyebrow">El sonido del ranchero</span>
            <h2>Calor, profundidad y expresión</h2>
        </div>
        <div class="cards-grid">
            <div class="card">
                <div class="card-icon">🌵</div>
                <h3>Calidez de caoba</h3>
                <p>La caoba produce un tono más oscuro y cálido que el palo de rosa. En el corrido ranchero, ese calor es lo que da emoción a las frases lentas y los glissandos expresivos.</p>
            </div>
            <div class="card">
                <div class="card-icon">🎤</div>
                <h3>Compañera de la voz</h3>
                <p>El ranchero es vocal por naturaleza. La guitarra tiene que acompañar sin opacar la voz. El rango medio de la caoba encaja perfecto debajo de un tenor ranchero.</p>
            </div>
            <div class="card">
                <div class="card-icon">🎸</div>
                <h3>12 o 6 cuerdas</h3>
                <p>El ranchero es el único género donde a veces la 6 cuerdas funciona igual de bien. Para corridos gruperos: 12 cuerdas. Para rancheras íntimas: 6 cuerdas.</p>
            </div>
        </div>
    </div>
</section>

<div class="string-divider"></div>

<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="eyebrow">Nuestras recomendaciones</span>
            <h2>Las Takamine para el ranchero</h2>
        </div>
        <div class="cards-grid">
            <div class="card card--featured">
                <div class="card-icon">🌵</div>
                <h3>Corrido ranchero grupal — GJ72CE-12</h3>
                <p>12 cuerdas, cuerpo jumbo, caoba en aros y fondo. El volumen del jumbo más el calor de la caoba. El combo perfecto para corridos con conjunto.</p>
                <ul class="card-specs">
                    <li>✓ Tono cálido y gordo</li>
                    <li>✓ Volumen natural fuerte</li>
                    <li>✓ Perfecta con voz de barítono</li>
                </ul>
                <a href="{{ route('contacto') }}" class="card-link">Consultar →</a>
            </div>
            <div class="card">
                <div class="card-icon">🎵</div>
                <h3>Ranchera íntima — EF341SC (6 cuerdas)</h3>
                <p>Tapa de abeto Sitka sólido, cuerpo dreadnought, caoba sólida. Para el guitarrista que acompaña voz sin amplificación en espacios pequeños.</p>
                <ul class="card-specs">
                    <li>✓ Respuesta suave y expresiva</li>
                    <li>✓ Dinámica precisa</li>
                    <li>✓ Ideal para grabaciones acústicas</li>
                </ul>
                <a href="{{ route('contacto') }}" class="card-link">Consultar →</a>
            </div>
        </div>
    </div>
</section>

<section class="section section-dark">
    <div class="container">
        <span class="eyebrow">Tradición ranchera</span>
        <h2>El corrido merece el instrumento correcto</h2>
        <p>Cuéntanos cómo es tu proyecto ranchero y te recomendamos el modelo que va con tu voz y tu estilo.</p>
        <a href="{{ route('contacto') }}" class="btn btn-primary btn-lg">Pedir recomendación</a>
    </div>
</section>

@endsection