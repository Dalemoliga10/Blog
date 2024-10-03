{{-- Coge la plantilla (carpeta.nombre) --}}
@extends('layouts.app')

{{-- Otra manera de hacerlo en una linea sin abrir ni cerrar --}}
@section('title', 'aaa') 

{{-- Importación css --}}
@push('css')
    <style>
        body{
            background-color: #f3f3f3;
        }
    </style>
@endpush

{{-- Indica que es el contenido varable llamado content previamente en la plantilla--}}
@section('content')
<div class = "max-w-4xl mx-auto px-4">
    {{-- <h1>Bienvenido a la pagina principal</h1> --}}
    {{-- Me traigo la alerta sin tener que ponerla muchas veces --}}
    <x-alert2 type="danger" class="mb-4">
        <x-slot name="title">
            Titulo
        </x-slot>
        contenido de la alerta
    </x-alert2 >
    <p>hola mundo</p>

</div>
@endsection

