@extends('layouts.app')

@section('content')
    @vite(['resources/js/diagramador.js'])
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <div class="flex justify-between">
                <div class="flex space-x-4">
                    

                    <a href="{{ route('exportarCase') }}" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                        Exportar diagrama
                    </a>
                </div>

                <div class="flex items-center text-gray-500 text-sm">
                    @forelse ($invitadosArray as $i)
                        <span>{{ $i['invitado'] }}</span>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </main>
    <div id="diagramador" style="border: 0px solid black; width: 100%; height: 570px; position: relative; -webkit-tap-highlight-color: rgba(255, 255, 255, 0); cursor: auto;"></div>

    <button id="btnCargar" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" onclick="load()">
        Cargar
    </button>
</main>
</html>
