@extends('layouts.app')
@section('title', 'Centro de Ayuda')

@section('content')
<section class="section">
    <div class="container" style="max-width:800px;">
        <div class="section-header" style="text-align:left;">
            <span class="eyebrow">Soporte</span>
            <h1>Centro de Ayuda</h1>
            <p style="color:var(--slate);">Encuentra respuestas a las preguntas más frecuentes sobre DevAgency.</p>
        </div>

        <!-- Búsqueda rápida -->
        <div style="margin-bottom:2.5rem;">
            <form action="{{ route('search') }}" method="GET" style="display:flex;gap:.75rem;">
                <input type="search" name="q" class="form-control" placeholder="Buscar en la ayuda...">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </form>
        </div>

        <!-- FAQs -->
        <div>
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    ¿Cómo creo una cuenta? <span>+</span>
                </button>
                <div class="faq-answer">
                    Haz clic en "Registrarse" en la barra de navegación. Completa el formulario con tu nombre, correo y una contraseña segura. Recibirás un correo de confirmación para activar tu cuenta.
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    ¿Cómo recupero mi contraseña? <span>+</span>
                </button>
                <div class="faq-answer">
                    En la pantalla de inicio de sesión, haz clic en "¿Olvidaste tu contraseña?". Ingresa tu correo y te enviaremos un enlace de recuperación válido por 60 minutos.
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    ¿Cómo solicito un presupuesto? <span>+</span>
                </button>
                <div class="faq-answer">
                    Ve a la sección <a href="{{ route('contacto') }}">Contáctanos</a>, selecciona "Solicitar presupuesto" en el asunto y describe tu proyecto. Te responderemos en menos de 24 horas hábiles con una propuesta detallada.
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    ¿Cuáles son los métodos de pago aceptados? <span>+</span>
                </button>
                <div class="faq-answer">
                    Aceptamos transferencia bancaria, tarjeta de crédito/débito (Visa, Mastercard, American Express) y PayPal. El 50% se paga al inicio del proyecto y el restante a la entrega final.
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    ¿Cuánto tiempo tarda el desarrollo de un sitio web? <span>+</span>
                </button>
                <div class="faq-answer">
                    Depende de la complejidad. Un sitio corporativo tarda entre 2 y 4 semanas; una aplicación web compleja puede tomar de 2 a 6 meses. En la consulta inicial establecemos un cronograma preciso.
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    ¿Ofrecen soporte post-lanzamiento? <span>+</span>
                </button>
                <div class="faq-answer">
                    Sí, ofrecemos planes de mantenimiento mensual que incluyen actualizaciones de seguridad, corrección de errores, actualizaciones de contenido y soporte técnico prioritario.
                </div>
            </div>
        </div>

        <div style="margin-top:3rem;padding:2rem;background:rgba(99,102,241,.05);border-radius:var(--radius-lg);border:1px solid rgba(99,102,241,.15);text-align:center;">
            <h3>¿No encontraste lo que buscabas?</h3>
            <p style="color:var(--slate);margin:.75rem 0 1.5rem;">Nuestro equipo está disponible para ayudarte.</p>
            <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
                <a href="{{ route('contacto') }}" class="btn btn-primary">Contactar soporte</a>
                <a href="#chat-widget" class="btn btn-outline" onclick="document.getElementById('chat-toggle').click()">Chat en vivo</a>
            </div>
        </div>
    </div>
</section>
@endsection
