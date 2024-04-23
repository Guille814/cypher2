<!-- perfil.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Mi Perfil') }}</div>

                <div class="card-body">
                    <p>Nombre: {{ $usuario->nombre }}</p>
                    <p>Apellido: {{ $usuario->apellido }}</p>
                    <p>Email: {{ $usuario->email }}</p>
                    <!-- Agrega más información del perfil aquí -->
                </div>
            </div><hr>
            @include('posts.createPost')
        </div>
    </div>
</div>
@endsection
