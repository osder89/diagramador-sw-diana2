@php
    $imageUrl = asset('imagen/descarga.png');
@endphp
@extends('layouts.app') 

@section('content')
@vite(['resources/js/diagramador.js'])
<!-- empieza aca la parte de jorge -->
<x-app-layout>
    <x-slot name="header">
        <div class="container mx-auto py-10 text-center">
            <div class="flex flex-wrap items-center justify-center">
                <div class="w-full md:w-1/2 order-2 md:order-1">
                    <h1 class="text-3xl font-semibold mb-4">Diagrama de Secuencia</h1>
                    <p class="text-lg text-gray-700">Los diagramas de secuencia son una forma gráfica y efectiva de representar visualmente las interacciones entre objetos en un sistema de software o en un proceso. Estos diagramas forman parte de la familia de diagramas de la notación UML (Unified Modeling Language), que se utiliza comúnmente en el diseño y modelado de sistemas de software. Los diagramas de secuencia se centran en mostrar cómo los distintos objetos o componentes de un sistema interactúan a lo largo del tiempo, lo que facilita la comprensión de la lógica de ejecución y la comunicación entre las partes involucradas.</p>
                    
                    
            </div>
            <div class="w-full md:w-1/2 order-1 md:order-2">
            <div class="flex flex-col justify-center items-center h-[100vh]">
            <div class="relative flex flex-col items-center rounded-[10px] border-[1px] border-gray-200 w-[400px] mx-auto p-4 bg-white bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none">
                <div class="relative flex h-32 w-full justify-center rounded-xl bg-cover" >
                    <img src='https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/media/banner.ef572d78f29b0fee0a09.png' class="absolute flex h-32 w-full justify-center rounded-xl bg-cover"> 
                    <div class="absolute -bottom-12 flex h-[87px] w-[87px] items-center justify-center rounded-full border-[4px] border-white bg-pink-400 dark:!border-navy-700">
                        <img src="{{ $imageUrl }}" alt="" />
                    </div>
                </div> 
                <div class="mt-16 flex flex-col items-center">
                    <h4 class="text-xl font-bold text-navy-700 dark:text-white">
                    Jorge Eduardo Cari Araca
                    </h4>
                    <p class="text-base font-normal text-gray-600">Desarrollador</p>
                </div> 
                <div class="mt-6 mb-3 flex gap-14 md:!gap-14">
                    <div class="flex flex-col items-center justify-center">
                    <p class="text-sm font-bold text-navy-700 dark:text-white">Laravel</p>
                    <p class="text-sm font-normal text-gray-600">FronEnd</p>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                    <p class="text-sm font-bold text-navy-700 dark:text-white">
                        PHP y JavaScript
                    </p>
                    <p class="text-sm font-normal text-gray-600">BackEnd</p>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                    <p class="text-sm font-bold text-navy-700 dark:text-white">
                        Diagramador
                    </p>
                    <p class="text-sm font-normal text-gray-600">GoJS</p>
                    </div>
                </div>
            </div>  
           
        </div>
                </div>
            </div> 
        </div>
    </x-slot>
 
</x-app-layout>

<!-- termina aca la parte de jorge -->

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">¡Éxito!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <title>Close</title>
                    <path
                        d="M14.293 5.293a1 1 0 011.414 1.414L11.414 10l4.293 4.293a1 1 0 11-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.293a1 1 0 111.414-1.414L10 8.586l4.293-4.293a1 1 0 011.414 0z" />
                </svg>
            </span>
        </div>
    @endif

    <div class="container mx-auto mt-8">
        <div class="w-full bg-white rounded-lg shadow-md p-4 m-2">
            <div class="flex justify-between items-center">
                <h1 class="text-3xl font-semibold my-4">Diagramas</h1>
                <a href="{{ route('diagramador.create') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-4">Crear Diagrama</a>
            </div>

            <table class="min-w-full border border-collapse border-gray-300">
                <thead>
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">ID</th>
                        <th class="border border-gray-300 px-4 py-2">Título</th>
                        <th class="border border-gray-300 px-4 py-2">Invitados</th>
                        <th class="border border-gray-300 px-4 py-2">Autor</th>
                        <th class="border border-gray-300 px-4 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @dd($arrayDiagramas) --}}
                    @foreach ($arrayDiagramas as $diagrama)
                        {{-- @dd($diagrama) --}}
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $diagrama['id_diagrama'] }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $diagrama['titulo'] }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-center">
                                @foreach ($diagrama['invitados'] as $i)
                                    <p>
                                        {{ $i }}
                                    </p>
                                @endforeach
                            </td>
                            <td class="border border-gray-300 px-4 py-2">{{ $diagrama['autornombre'] }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-center">
                                <div class="flex items-center justify-center">
                                    <a href="{{ route('diagramador.edit', $diagrama['id_diagrama']) }}"
                                        class="text-black hover:text-blue-700 mr-2">Editar</a>
                                    <a href="{{ route('invitar', $diagrama['id_diagrama']) }}"
                                        class="text-black hover:text-blue-700 mr-2">Compartir</a>
                                    <a href="{{ route('diagramador.show', $diagrama['id_diagrama']) }}"
                                        class="text-black hover:text-green-700 mr-2">Trabajar</a>
                                    <form action="{{ route('diagramador.destroy', $diagrama['id_diagrama']) }}"
                                        method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700">Eliminar</button>
                                    </form>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @if ($diagramasInvitados!=null)
    <div class="container mx-auto mt-8">
        <div class="w-full bg-white rounded-lg shadow-md p-4 m-2">
            <h1 class="text-3xl font-semibold my-4">Invitaciones</h1>
            <table class="min-w-full border border-collapse border-gray-300">
                <thead>
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">ID</th>
                        <th class="border border-gray-300 px-4 py-2">Título</th>
                        <th class="border border-gray-300 px-4 py-2">Autor</th>
                        <th class="border border-gray-300 px-4 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @dd($arrayDiagramas) --}}
                    @foreach ($diagramasInvitados as $diagrama)
                        {{-- @dd($diagrama) --}}
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $diagrama['id'] }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $diagrama['titulo'] }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $diagrama['autornombre'] }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-center">
                                <div class="flex items-center justify-center">
                                    <a href="{{ route('diagramador.show', $diagrama['id']) }}"
                                        class="text-black hover:text-green-700 mr-2">Trabajar</a>
                                    <form action="#" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700">Abandonar</button>
                                    </form>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif
@endsection
