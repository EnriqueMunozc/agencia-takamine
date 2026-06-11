/**
 * Agencia Takamine — app.js
 * Clases OOP: Navigator, AlertManager, FormValidator, PasswordStrength,
 *             PasswordToggle, ChatBot, FAQAccordion, SearchManager
 */

'use strict';

class Navigator {
    constructor() {
        this.nav       = document.getElementById('main-nav');
        this.hamburger = document.getElementById('hamburger');
        this.navLinks  = this.nav?.querySelector('.nav-links');
        this.isOpen    = false;
        this._bindEvents();
    }
    _bindEvents() {
        this.hamburger?.addEventListener('click', () => this.toggle());
        document.addEventListener('click', (e) => { if (!this.nav?.contains(e.target) && this.isOpen) this.close(); });
        document.addEventListener('keydown', (e) => { if (e.key === 'Escape') this.close(); });
    }
    toggle() { this.isOpen ? this.close() : this.open(); }
    open()  { this.navLinks?.classList.add('open'); this.hamburger?.setAttribute('aria-expanded','true');  this.isOpen = true; }
    close() { this.navLinks?.classList.remove('open'); this.hamburger?.setAttribute('aria-expanded','false'); this.isOpen = false; }
}

class AlertManager {
    constructor(timeout = 5000) {
        this.timeout = timeout;
        document.querySelectorAll('.alert').forEach(a => {
            setTimeout(() => this.dismiss(a), this.timeout);
            a.querySelector('.alert-close')?.addEventListener('click', () => this.dismiss(a));
        });
    }
    dismiss(el) {
        el.style.opacity = '0'; el.style.transform = 'translateY(-8px)';
        el.style.transition = 'opacity .3s, transform .3s';
        setTimeout(() => el.remove(), 320);
    }
}

class FormValidator {
    constructor(formSelector, rules = {}) {
        this.form  = document.querySelector(formSelector);
        this.rules = rules;
        if (this.form) this._bindSubmit();
    }
    static RULES = {
        required: (v)    => v.trim() !== ''                           || 'Este campo es obligatorio.',
        email:    (v)    => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v)     || 'Ingresa un correo válido.',
        minLen:   (n) => (v) => v.length >= n                         || `Mínimo ${n} caracteres.`,
        match:    (id) => (v) => v === document.getElementById(id)?.value || 'Los campos no coinciden.',
        phone:    (v)    => /^[\d\s\+\-\(\)]{7,15}$/.test(v)         || 'Teléfono no válido.',
        noScript: (v)    => !/<script|javascript:/i.test(v)           || 'Contenido no permitido.',
        strongPw: (v)    => /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/.test(v)
                            || 'Necesita mayúsculas, minúsculas, número y símbolo (mín. 8).',
    };
    _bindSubmit() {
        this.form.addEventListener('submit', (e) => { if (!this.validate()) e.preventDefault(); });
        Object.keys(this.rules).forEach(name => {
            const input = this.form.querySelector(`[name="${name}"]`);
            input?.addEventListener('blur',  () => this._validateField(name, input));
            input?.addEventListener('input', () => { if (input.classList.contains('is-invalid')) this._validateField(name, input); });
        });
    }
    validate() {
        let valid = true;
        Object.keys(this.rules).forEach(name => {
            const input = this.form.querySelector(`[name="${name}"]`);
            if (input && !this._validateField(name, input)) valid = false;
        });
        return valid;
    }
    _validateField(name, input) {
        for (const rule of this.rules[name]) {
            const fn = typeof rule === 'function' ? rule : FormValidator.RULES[rule];
            const result = fn(input.value);
            if (result !== true) { this._setInvalid(input, result); return false; }
        }
        this._setValid(input); return true;
    }
    _setInvalid(input, msg) {
        input.classList.add('is-invalid'); input.classList.remove('is-valid');
        input.setAttribute('aria-invalid', 'true');
        let fb = input.parentElement.querySelector('.invalid-feedback');
        if (!fb) { fb = document.createElement('div'); fb.className = 'invalid-feedback'; input.parentElement.appendChild(fb); }
        fb.textContent = msg; fb.style.display = 'block';
    }
    _setValid(input) {
        input.classList.remove('is-invalid'); input.classList.add('is-valid');
        input.setAttribute('aria-invalid', 'false');
        const fb = input.parentElement.querySelector('.invalid-feedback');
        if (fb) fb.style.display = 'none';
    }
}

class PasswordStrength {
    constructor(inputSel, fillSel, textSel) {
        this.input = document.querySelector(inputSel);
        this.fill  = document.querySelector(fillSel);
        this.text  = document.querySelector(textSel);
        if (this.input) this.input.addEventListener('input', () => this._update());
    }
    _score(pw) {
        let s = 0;
        if (pw.length >= 8) s++; if (/[A-Z]/.test(pw)) s++;
        if (/[a-z]/.test(pw)) s++; if (/\d/.test(pw)) s++; if (/[\W_]/.test(pw)) s++;
        return s;
    }
    _update() {
        const s = this._score(this.input.value);
        const levels = [
            { pct:'0%',   color:'#D9CDB8', label:'' },
            { pct:'25%',  color:'#C0392B', label:'Muy débil' },
            { pct:'50%',  color:'#E67E22', label:'Débil' },
            { pct:'75%',  color:'#F1C40F', label:'Aceptable' },
            { pct:'90%',  color:'#2E7D4F', label:'Fuerte' },
            { pct:'100%', color:'#C8842A', label:'Muy fuerte' },
        ];
        const l = levels[s] || levels[0];
        if (this.fill) { this.fill.style.width = l.pct; this.fill.style.background = l.color; }
        if (this.text) { this.text.textContent = l.label; this.text.style.color = l.color; }
    }
}

class PasswordToggle {
    constructor() {
        document.querySelectorAll('.toggle-pw').forEach(btn => {
            btn.addEventListener('click', () => {
                const input = btn.closest('.password-toggle')?.querySelector('input');
                if (!input) return;
                const isText = input.type === 'text';
                input.type = isText ? 'password' : 'text';
                btn.textContent = isText ? '👁' : '🙈';
            });
        });
    }
}

class ChatBot {
    constructor() {
        this.toggle   = document.getElementById('chat-toggle');
        this.box      = document.getElementById('chat-box');
        this.closeBtn = document.getElementById('chat-close');
        this.input    = document.getElementById('chat-input');
        this.sendBtn  = document.getElementById('chat-send');
        this.messages = document.getElementById('chat-messages');
        this.isOpen   = false;

        // Respuestas temáticas de guitarras
        this.responses = [
            'La Takamine GJ72CE de 12 cuerdas es ideal para norteño. ¿Quieres más info de ese modelo?',
            'Las cuerdas Elixir Phosphor Bronze son las más recomendadas para 12 cuerdas en clima cálido.',
            '¿Buscas algo específico? Cuéntame el género que tocas y te recomiendo el modelo correcto.',
            'Para banda sinaloense te recomiendo un modelo con tapa de abeto y buena proyección acústica.',
            'Contáctanos por WhatsApp o visita la sección de catálogo para ver disponibilidad y precios.',
            'El sistema de pastilla Palathetic de Takamine capta la vibración real de la madera. ¡Suena increíble amplificado!',
        ];
        this._bindEvents();
    }
    _bindEvents() {
        this.toggle?.addEventListener('click',  () => this._toggle());
        this.closeBtn?.addEventListener('click', () => this._close());
        this.sendBtn?.addEventListener('click',  () => this._send());
        this.input?.addEventListener('keydown',  (e) => { if (e.key === 'Enter') this._send(); });
    }
    _toggle() { this.isOpen ? this._close() : this._open(); }
    _open()   { this.box?.classList.add('open'); this.isOpen = true; this.input?.focus(); }
    _close()  { this.box?.classList.remove('open'); this.isOpen = false; }
    _send() {
        const text = this.input?.value.trim();
        if (!text) return;
        this._append(text, 'user');
        this.input.value = '';
        setTimeout(() => {
            const reply = this.responses[Math.floor(Math.random() * this.responses.length)];
            this._append(reply, 'bot');
        }, 700);
    }
    _append(text, type) {
        const div = document.createElement('div');
        div.className = `chat-msg ${type}`;
        const p = document.createElement('p');
        p.textContent = text;
        div.appendChild(p);
        this.messages?.appendChild(div);
        this.messages.scrollTop = this.messages.scrollHeight;
    }
}

class FAQAccordion {
    constructor() {
        document.querySelectorAll('.faq-question').forEach(btn => {
            btn.addEventListener('click', () => {
                const isOpen = btn.classList.contains('open');
                document.querySelectorAll('.faq-question.open').forEach(b => {
                    b.classList.remove('open'); b.nextElementSibling?.classList.remove('open');
                });
                if (!isOpen) { btn.classList.add('open'); btn.nextElementSibling?.classList.add('open'); }
            });
        });
    }
}

class SearchManager {
    constructor() {
        const q = new URLSearchParams(window.location.search).get('q');
        if (q) this._highlight(q);
    }
    _highlight(query) {
        const terms = query.trim().split(/\s+/).filter(Boolean);
        document.querySelectorAll('.search-result p, .search-result h3').forEach(el => {
            terms.forEach(t => {
                const re = new RegExp(`(${t.replace(/[.*+?^${}()|[\]\\]/g,'\\$&')})`, 'gi');
                el.innerHTML = el.innerHTML.replace(re, '<mark>$1</mark>');
            });
        });
    }
}

document.addEventListener('DOMContentLoaded', () => {
    new Navigator();
    new AlertManager();
    new PasswordToggle();
    new ChatBot();
    new FAQAccordion();
    new SearchManager();

    new FormValidator('#form-register', {
        name:                  [FormValidator.RULES.required, FormValidator.RULES.noScript],
        email:                 [FormValidator.RULES.required, FormValidator.RULES.email],
        password:              [FormValidator.RULES.required, FormValidator.RULES.minLen(8), FormValidator.RULES.strongPw],
        password_confirmation: [FormValidator.RULES.required, FormValidator.RULES.match('password')],
    });
    new PasswordStrength('#password', '#pw-fill', '#pw-text');

    new FormValidator('#form-login', {
        email:    [FormValidator.RULES.required, FormValidator.RULES.email],
        password: [FormValidator.RULES.required],
    });

    new FormValidator('#form-contacto', {
        name:    [FormValidator.RULES.required, FormValidator.RULES.noScript],
        email:   [FormValidator.RULES.required, FormValidator.RULES.email],
        phone:   [FormValidator.RULES.phone],
        message: [FormValidator.RULES.required, FormValidator.RULES.minLen(10), FormValidator.RULES.noScript],
    });

    new FormValidator('#form-recovery', {
        email: [FormValidator.RULES.required, FormValidator.RULES.email],
    });
});
