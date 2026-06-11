@extends('layouts.app')
@section('title', 'Accesorios')
@section('content')

<section class="hero hero--sm">
    <svg class="hero-strings" aria-hidden="true">
        @for($i = 1; $i <= 12; $i++)
            <line x1="0" y1="{{ $i * 8 }}%" x2="100%" y2="{{ $i * 8 - 2 }}%"/>
        @endfor
    </svg>
    <div class="hero-content container">
        <span class="hero-eyebrow">Catálogo · Accesorios</span>
        <h1>Todo lo que<br><em>tu guitarra necesita</em></h1>
        <p>Cuerdas, estuches, correas, afinadores y más. Accesorios seleccionados para Takamine.</p>
    </div>
</section>

<div class="string-divider"></div>

<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <span class="eyebrow">Nuestros accesorios</span>
            <h2>Para cuidar tu inversión</h2>
            <p>Una buena guitarra merece los accesorios correctos. Seleccionamos solo los que usamos y confiamos.</p>
        </div>
        <div class="cards-grid">
            <div class="card">
                <div class="card-icon">🧳</div>
                <h3>Estuches rígidos</h3>
                <p>Estuches ABS y de madera reforzada compatibles con los modelos Takamine de 12 y 6 cuerdas. Protección real para el viaje y el traslado a tarima.</p>
                <a href="{{ route('contacto') }}" class="card-link">Consultar →</a>
            </div>
            <div class="card">
                <div class="card-icon">🎵</div>
                <h3>Cuerdas de repuesto</h3>
                <p>Juegos de cuerdas para 12 y 6 cuerdas: D'Addario EJ38 (12c), Elixir 16052 (12c) y D'Addario EJ16 (6c). Las que usamos en nuestras propias guitarras.</p>
                <a href="{{ route('contacto') }}" class="card-link">Consultar →</a>
            </div>
            <div class="card">
                <div class="card-icon">🎚️</div>
                <h3>Afinadores</h3>
                <p>Afinadores de clip Snark SN-8 y Peterson StroboClip HD. Para afinar 12 cuerdas con precisión, especialmente las cuerdas octavadas.</p>
                <a href="{{ route('contacto') }}" class="card-link">Consultar →</a>
            </div>
            <div class="card">
                <div class="card-icon">🎸</div>
                <h3>Correas</h3>
                <p>Correas de piel y nylon de 4 a 6 cm de ancho. Para guitarras de 12 cuerdas recomendamos ancho mínimo de 5 cm — pesan más y el hombro lo agradece.</p>
                <a href="{{ route('contacto') }}" class="card-link">Consultar →</a>
            </div>
            <div class="card">
                <div class="card-icon">🔧</div>
                <h3>Cables y adaptadores</h3>
                <p>Cables Monster y Evidence Audio de 3 y 6 metros, jack TS/TRS. Para que la señal llegue limpia al PA sin interferencias en tarima.</p>
                <a href="{{ route('contacto') }}" class="card-link">Consultar →</a>
            </div>
            <div class="card">
                <div class="card-icon">💧</div>
                <h3>Humidificadores</h3>
                <p>El norte de México es seco. Los humidificadores D'Addario Two-Way protegen la madera sólida de las Takamine Pro contra rajaduras.</p>
                <a href="{{ route('contacto') }}" class="card-link">Consultar →</a>
            </div>
        </div>
    </div>
</section>

<section class="section section-dark">
    <div class="container">
        <span class="eyebrow">¿No ves lo que buscas?</span>
        <h2>Pregunta directamente</h2>
        <p>Si necesitas algo específico para tu Takamine, escríbenos. Buscamos y conseguimos.</p>
        <a href="{{ route('contacto') }}" class="btn btn-primary btn-lg">Contactar</a>
    </div>
</section>

@endsection