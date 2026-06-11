@extends('layouts.app')
@section('title', 'Buzón de mensajes')

@section('content')
<section class="section">
    <div class="container">
        <h1 style="margin-bottom:1.5rem;">Buzón de mensajes</h1>
        <div class="buzon-layout">
            <!-- Sidebar de carpetas -->
            <div class="buzon-sidebar">
                <h3>Carpetas</h3>
                <ul class="buzon-folders">
                    <li><a href="#" class="active">📥 Entrada <span style="margin-left:auto;background:var(--indigo);padding:1px 7px;border-radius:100px;font-size:.7rem;">3</span></a></li>
                    <li><a href="#">📤 Enviados</a></li>
                    <li><a href="#">⭐ Destacados</a></li>
                    <li><a href="#">🗂️ Archivados</a></li>
                    <li><a href="#">🗑️ Papelera</a></li>
                </ul>
                <div style="margin-top:2rem;">
                    <a href="{{ route('contacto') }}" class="btn btn-primary" style="width:100%;justify-content:center;font-size:.85rem;">+ Nuevo mensaje</a>
                </div>
            </div>

            <!-- Lista de mensajes -->
            <div class="buzon-content">
                <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:1rem;">
                    <h3 style="font-size:1rem;">Bandeja de entrada</h3>
                    <form action="{{ route('search') }}" method="GET" style="display:flex;gap:.5rem;">
                        <input type="search" name="q" class="form-control" placeholder="Buscar mensajes..." style="width:200px;">
                        <button type="submit" class="btn btn-outline" style="padding:.45rem .9rem;">🔍</button>
                    </form>
                </div>

                <!-- Mensajes de ejemplo -->
                <div class="buzon-msg unread">
                    <div class="buzon-avatar">D</div>
                    <div class="buzon-msg-info">
                        <div class="sender"><span class="unread-dot"></span>DevAgency Team</div>
                        <div class="subject">Bienvenido a DevAgency 🎉</div>
                    </div>
                    <div class="buzon-msg-date">Hoy</div>
                </div>
                <div class="buzon-msg unread">
                    <div class="buzon-avatar" style="background:#10b981;">S</div>
                    <div class="buzon-msg-info">
                        <div class="sender"><span class="unread-dot"></span>Soporte técnico</div>
                        <div class="subject">Tu solicitud de presupuesto fue recibida</div>
                    </div>
                    <div class="buzon-msg-date">Ayer</div>
                </div>
                <div class="buzon-msg">
                    <div class="buzon-avatar" style="background:#f97316;">N</div>
                    <div class="buzon-msg-info">
                        <div class="sender">Newsletter DevAgency</div>
                        <div class="subject">Tendencias de desarrollo web 2026</div>
                    </div>
                    <div class="buzon-msg-date">15 may</div>
                </div>

                <div style="text-align:center;padding:2rem;color:var(--slate);font-size:.875rem;">
                    Mostrando 3 mensajes · <a href="#">Cargar más</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
