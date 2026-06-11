@extends('layouts.app')
@section('title', 'Contáctanos')

@section('content')
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="eyebrow">Hablemos</span>
            <h1>Contáctanos</h1>
        </div>
        <div class="contact-grid">
            <div class="contact-info">
                <p>¿Tienes un proyecto en mente o una pregunta? Escríbenos y te respondemos en menos de 24 horas.</p>
                <div class="contact-item">
                    <div class="contact-item-icon">📧</div>
                    <div class="contact-item-text">
                        <h4>Correo</h4>
                        <p>contacto@devagency.com</p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-item-icon">📞</div>
                    <div class="contact-item-text">
                        <h4>Teléfono</h4>
                        <p>+52 (844) 123-4567</p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-item-icon">🕐</div>
                    <div class="contact-item-text">
                        <h4>Horario</h4>
                        <p>Lunes – Viernes, 9:00 – 18:00</p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-item-icon">💬</div>
                    <div class="contact-item-text">
                        <h4>Chat en vivo</h4>
                        <p>Disponible en horario de oficina</p>
                    </div>
                </div>
            </div>

            <div class="contact-form-wrap">
                <h3 style="margin-bottom:1.5rem;">Envíanos un mensaje</h3>
                <form id="form-contacto" action="{{ route('contacto.send') }}" method="POST" novalidate>
                    @csrf

                    <div class="form-group">
                        <label for="name">Nombre completo <span class="required">*</span></label>
                        <input type="text" id="name" name="name"
                            class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }}" placeholder="Tu nombre" required>
                        @error('name')
                            <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Correo electrónico <span class="required">*</span></label>
                        <input type="email" id="email" name="email"
                            class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email') }}" placeholder="tu@correo.com" required>
                        @error('email')
                            <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="phone">Teléfono <span style="color:var(--slate);font-weight:400;">(opcional)</span></label>
                        <input type="tel" id="phone" name="phone"
                            class="form-control @error('phone') is-invalid @enderror"
                            value="{{ old('phone') }}" placeholder="+52 844 000 0000">
                        @error('phone')
                            <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="subject">Asunto</label>
                        <select id="subject" name="subject" class="form-control">
                            <option value="">Selecciona un asunto</option>
                            <option value="presupuesto" {{ old('subject') == 'presupuesto' ? 'selected' : '' }}>Solicitar presupuesto</option>
                            <option value="soporte"     {{ old('subject') == 'soporte' ? 'selected' : '' }}>Soporte técnico</option>
                            <option value="informacion" {{ old('subject') == 'informacion' ? 'selected' : '' }}>Información general</option>
                            <option value="otro"        {{ old('subject') == 'otro' ? 'selected' : '' }}>Otro</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Mensaje <span class="required">*</span></label>
                        <textarea id="message" name="message" rows="5"
                            class="form-control @error('message') is-invalid @enderror"
                            placeholder="Cuéntanos sobre tu proyecto o pregunta..." required>{{ old('message') }}</textarea>
                        @error('message')
                            <div class="invalid-feedback" style="display:block;">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- CAPTCHA humano -->
                    <div class="captcha-box">
                        <input type="checkbox" id="captcha" name="captcha" class="captcha-checkbox" required>
                        <label for="captcha" class="captcha-label">No soy un robot</label>
                        <div class="captcha-logo">🛡️<br>reCAPTCHA</div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Enviar mensaje</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
