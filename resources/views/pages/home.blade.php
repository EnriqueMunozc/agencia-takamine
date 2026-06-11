@extends('layouts.app')
@section('title', 'Inicio')

@section('content')

<!-- HERO con "cuerdas" decorativas -->
<section class="hero">
    <!-- 12 líneas = 12 cuerdas -->
    <svg class="hero-strings" aria-hidden="true">
        @for($i = 1; $i <= 12; $i++)
            <line x1="0" y1="{{ $i * 8 }}%" x2="100%" y2="{{ $i * 8 - 2 }}%"/>
        @endfor
    </svg>

    <div class="hero-content container">
        <span class="hero-eyebrow">Guitarras Takamine · Regional Mexicano</span>
        <h1>El sonido que<br><em>define</em> el norte</h1>
        <p>Especialistas en guitarras Takamine de 12 cuerdas para norteño, banda y ranchero. Instrumentos que resuenan con el alma del regional mexicano.</p>
        <div class="hero-actions">
            <a href="{{ route('catalogo.12cuerdas') }}" class="btn btn-primary btn-lg">Ver guitarras de 12 cuerdas</a>
            <a href="{{ route('contacto') }}" class="btn btn-ghost btn-lg">Consultar disponibilidad</a>
        </div>
    </div>

    <!-- Insignia de 12 cuerdas — la firma del diseño -->
    <div class="hero-badge">
        <span class="badge-num">12</span>
        <span class="badge-label">cuerdas</span>
    </div>
</section>

<div class="string-divider"></div>

<!-- POR QUÉ TAKAMINE -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <span class="eyebrow">Por qué Takamine</span>
            <h2>Hecha para el regional mexicano</h2>
            <p>Las Takamine de 12 cuerdas tienen el cuerpo, el sustain y el brillo que exige el género norteño.</p>
        </div>
        <div class="cards-grid">
            <div class="card">
                <div class="card-icon">🎸</div>
                <h3>12 cuerdas auténticas</h3>
                <p>El coro natural de un par de cuerdas afinadas al unísono y en octava crea ese sonido inconfundible del regional.</p>
            </div>
            <div class="card">
                <div class="card-icon">🌲</div>
                <h3>Tapa de abeto sólido</h3>
                <p>La madera de abeto Sitka que usa Takamine proyecta volumen y claridad incluso en tarimas y fiestas al aire libre.</p>
            </div>
            <div class="card">
                <div class="card-icon">🔧</div>
                <h3>Electrónica Palathetic</h3>
                <p>El sistema de pastilla bajo el hueso capta la vibración real de la madera, sin ese sonido plástico de otros sistemas.</p>
            </div>
        </div>

        <div class="stats-row">
            <div class="stat-item">
                <div class="stat-number">+40</div>
                <div class="stat-label">Años fabricando guitarras</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">12</div>
                <div class="stat-label">Cuerdas. Siempre 12.</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">100%</div>
                <div class="stat-label">Regional en el alma</div>
            </div>
        </div>
    </div>
</section>

<div class="string-divider"></div>

<!-- GÉNEROS -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="eyebrow">Por género</span>
            <h2>¿Qué estilo tocas?</h2>
        </div>
        <div class="cards-grid">
            <div class="card">
                <div class="card-icon">🤠</div>
                <h3>Norteño</h3>
                <p>El bajo rasgueo del norteño pide una 12 cuerdas con mucho volumen acústico. Las Takamine GJ72CE son la elección de los grupos serios.</p>
                <a href="{{ route('regional.norteno') }}" style="margin-top:1rem;display:inline-block;font-weight:600;font-size:.875rem;color:var(--ambar);">Explorar norteño →</a>
            </div>
            <div class="card">
                <div class="card-icon">🎺</div>
                <h3>Banda sinaloense</h3>
                <p>La banda necesita que la guitarra corte entre los metales. La proyección de la Takamine lo logra sin amplificación extra.</p>
                <a href="{{ route('regional.banda') }}" style="margin-top:1rem;display:inline-block;font-weight:600;font-size:.875rem;color:var(--ambar);">Explorar banda →</a>
            </div>
            <div class="card">
                <div class="card-icon">🌵</div>
                <h3>Ranchero</h3>
                <p>Para el corrido ranchero, el calor de la caoba en los aros y fondo da ese tono gordo y melancólico que el género exige.</p>
                <a href="{{ route('regional.ranchero') }}" style="margin-top:1rem;display:inline-block;font-weight:600;font-size:.875rem;color:var(--ambar);">Explorar ranchero →</a>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section" style="background:var(--caoba);text-align:center;">
    <div class="container">
        <span class="eyebrow">Únete</span>
        <h2 style="color:var(--crema);margin:.5rem 0 1rem;">¿Buscas tu Takamine de 12 cuerdas?</h2>
        <p style="color:rgba(245,239,224,.7);max-width:480px;margin:0 auto 2rem;">
            Crea tu cuenta y accede a disponibilidad, precios y asesoría personalizada sin compromiso.
        </p>
        <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Crear cuenta gratis</a>
    </div>
</section>

@endsection
