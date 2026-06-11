@extends('layouts.app')
@section('title', 'Nosotros')
@section('content')

<section class="hero hero--lg">
    <svg class="hero-strings" aria-hidden="true">
        @for($i = 1; $i <= 12; $i++)
            <line x1="0" y1="{{ $i * 8 }}%" x2="100%" y2="{{ $i * 8 - 2 }}%"/>
        @endfor
    </svg>
    <div class="hero-content container">
        <span class="hero-eyebrow">Nuestra historia</span>
        <h1>Más que una tienda,<br><em>una pasión</em></h1>
        <p>Nacimos del regional mexicano. Entendemos el género porque lo vivimos desde adentro.</p>
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
            <span class="eyebrow">Quiénes somos</span>
            <h2>De músicos para músicos</h2>
            <p>Agencia Takamine nació con una sola idea: acercar los mejores instrumentos japoneses a los intérpretes del regional mexicano.</p>
        </div>
        <div class="cards-grid">
            <div class="card">
                <div class="card-icon">🎸</div>
                <h3>Origen</h3>
                <p>Fundada en el norte de México por músicos con más de dos décadas tocando norteño y banda, sabemos exactamente qué busca un guitarrista serio cuando sube a tarima.</p>
            </div>
            <div class="card">
                <div class="card-icon">🇯🇵</div>
                <h3>Distribución oficial</h3>
                <p>Somos distribuidores autorizados de Takamine para México. Cada guitarra llega directo del fabricante, con su garantía original y su estuche de fábrica.</p>
            </div>
            <div class="card">
                <div class="card-icon">🤝</div>
                <h3>Asesoría real</h3>
                <p>No somos un catálogo en línea. Cuando nos escribes, te responde alguien que toca. Te decimos la verdad sobre qué modelo te conviene y cuál no.</p>
            </div>
        </div>
    </div>
</section>

<div class="string-divider"></div>

<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="eyebrow">Lo que nos mueve</span>
            <h2>Nuestros valores</h2>
        </div>
        <div class="cards-grid">
            <div class="card">
                <div class="card-icon">🎵</div>
                <h3>Autenticidad</h3>
                <p>El regional mexicano tiene una identidad sonora única. Nuestros instrumentos la respetan y la potencian, sin compromisos ni atajos.</p>
            </div>
            <div class="card">
                <div class="card-icon">🔍</div>
                <h3>Honestidad</h3>
                <p>Si un modelo no es para ti, te lo decimos. Preferimos un cliente satisfecho a una venta apresurada. La reputación se construye así.</p>
            </div>
            <div class="card">
                <div class="card-icon">🌟</div>
                <h3>Calidad sin negociar</h3>
                <p>Takamine es sinónimo de construcción japonesa impecable. Nosotros añadimos revisión personal de cada unidad antes de enviarla.</p>
            </div>
        </div>
    </div>
</section>

<section class="section section-dark">
    <div class="container">
        <div class="stats-row">
            <div class="stat-item">
                <div class="stat-number">+500</div>
                <div class="stat-label">Guitarras entregadas</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">12</div>
                <div class="stat-label">Años en el mercado</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">100%</div>
                <div class="stat-label">Garantía Takamine</div>
            </div>
        </div>
        <a href="{{ route('contacto') }}" class="btn btn-primary btn-lg">Escríbenos hoy</a>
    </div>
</section>

@endsection