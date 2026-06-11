@extends('layouts.app')

@section('title', 'Mi Perfil')

@section('content')
<div class="container">
    <h1>Mi Perfil</h1>

    <p><strong>Nombre:</strong> {{ auth()->user()->name }}</p>
    <p><strong>Correo:</strong> {{ auth()->user()->email }}</p>
</div>
@endsection