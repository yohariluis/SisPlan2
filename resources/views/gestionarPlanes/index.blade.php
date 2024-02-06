
    @extends('adminlte::page')

    @section('title', 'SisPlan 2.0')

    @section('content_header')
        <h1>Gestionar planes de venta</h1>
        
    @stop

    @section('content')
        <x-app-layout>
            <div class="py-12">
                <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                    @livewire('gestionarPlanesComponent')
                </div>
            </div>
        </x-app-layout> 
    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
        
    @stop

    @section('js')
        <script> console.log('Hi!'); </script>
    
    @stop
