@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-semibold mb-4">Invita a un Colaborador</h1>
        <div class="bg-white shadow-md rounded mx-auto p-4">

            <form action="{{ route('registrarInvitado') }}" method="POST"
                class="bg-white shadow-md rounded p-6">
                @csrf
                <div class="mb-4">
                    <label for="invitado" class="block text-gray-700 text-sm font-bold mb-2">Introduce el correo del invitado que colabore contigo en el diagrama "{{ $diagramador->titulo }}":</label>
                    <input type="text" name="invitado" id="invitado"
                        class="w-full p-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
                    <input type="text" name="id_diagrama" id="id_diagrama" value="{{ $diagramador->id }}"
                        class="w-full p-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300 hidden">
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:shadow-outline">Registrar</button>
                    <a href="{{ route('diagramador.index') }}" class="text-gray-600 hover:underline">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
