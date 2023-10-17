@php
    $imageUrl = asset('imagen/Sequence_diagram-social.png');
@endphp

<x-app-layout>
    <x-slot name="header">
        <div class="container mx-auto py-10 text-center">
            <div class="flex flex-wrap items-center justify-center">
                <div class="w-full md:w-1/2 order-2 md:order-1">
                    <h1 class="text-3xl font-semibold mb-4">Diagrama de Secuencia </h1>
                    <p class="text-lg text-gray-700">Gestion de Diagramas de Secuencia</p>
                    <p class="text-lg text-gray-700 mt-4"></p>
                    <a href="{{ route('diagramador.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-6 inline-block">Empezar</a>
                </div>
                <div class="w-full md:w-1/2 order-2 md:order-1">
                <img src="{{ $imageUrl }}" alt="Mi Imagen" class="max-w-md rounded shadow-lg"> 
</div>
            </div>
        
            </div> 
            <!-- dashboard de Diana desde aca,  -->
            <div class="container mx-auto py-10 text-center">
            <div class="w-full md:w-1/2 order-2 md:order-1"> 
            <h3 class="text-3xl font-semibold mb-4">Tecnologias Ocupadas</h3>
          
            <div class="min-w-[375px] md:min-w-[700px] xl:min-w-[800px] mt-3 grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-3 3xl:grid-cols-6">
                <div class="relative flex flex-grow !flex-row flex-col items-center rounded-[10px] rounded-[10px] border-[1px] border-gray-200 bg-white bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none">
                    <div class="ml-[18px] flex h-[90px] w-auto flex-row items-center">
                    <div class="rounded-full bg-lightPrimary p-3 dark:bg-navy-700">
                        <span class="flex items-center text-brand-500 dark:text-white">
                        

                        </span>
                    </div>
                    </div>
                    <div class="h-50 ml-4 flex w-auto flex-col justify-center">
                    <p class="font-dm text-sm font-medium text-gray-600">FrontEnt</p>
                    <h4 class="text-xl font-bold text-navy-700 dark:text-white">Laravel</h4>
                    </div>
                </div>
                <div class="relative flex flex-grow !flex-row flex-col items-center rounded-[10px] rounded-[10px] border-[1px] border-gray-200 bg-white bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none">
                    <div class="ml-[18px] flex h-[90px] w-auto flex-row items-center">
                    <div class="rounded-full bg-lightPrimary p-3 dark:bg-navy-700">
                        <span class="flex items-center text-brand-500 dark:text-white">
                        </span>
                    </div>
                    </div>
                    <div class="h-50 ml-4 flex w-auto flex-col justify-center">
                    <p class="font-dm text-sm font-medium text-gray-600">BackEnd</p>
                    <h4 class="text-xl font-bold text-navy-700 dark:text-white">PHP y JavaScript</h4>
                    </div>
                </div>
                <div class="relative flex flex-grow !flex-row flex-col items-center rounded-[10px] rounded-[10px] border-[1px] border-gray-200 bg-white bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none">
                    <div class="ml-[18px] flex h-[90px] w-auto flex-row items-center">
                    <div class="rounded-full bg-lightPrimary p-3 dark:bg-navy-700">
                        <span class="flex items-center text-brand-500 dark:text-white">
                        </span>
                    </div>
                    </div>
                    <div class="h-50 ml-4 flex w-auto flex-col justify-center">
                    <p class="font-dm text-sm font-medium text-gray-600">Base de Datos</p>
                    <h4 class="text-xl font-bold text-navy-700 dark:text-white">MySQL</h4>
                    </div>
                </div>
                <div class="relative flex flex-grow !flex-row flex-col items-center rounded-[10px] rounded-[10px] border-[1px] border-gray-200 bg-white bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none">
                    <div class="ml-[18px] flex h-[90px] w-auto flex-row items-center">
                    <div class="rounded-full bg-lightPrimary p-3 dark:bg-navy-700">
                        <span class="flex items-center text-brand-500 dark:text-white">
                        </span>
                    </div>
                    </div>
                    <div class="h-50 ml-4 flex w-auto flex-col justify-center">
                    <p class="font-dm text-sm font-medium text-gray-600">Diagramador</p>
                    <h4 class="text-xl font-bold text-navy-700 dark:text-white">GoJS</h4>
                    </div>
                </div>
                <div class="relative flex flex-grow !flex-row flex-col items-center rounded-[10px] rounded-[10px] border-[1px] border-gray-200 bg-white bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none">
                    <div class="ml-[18px] flex h-[90px] w-auto flex-row items-center">
                    <div class="rounded-full bg-lightPrimary p-3 dark:bg-navy-700">
                        <span class="flex items-center text-brand-500 dark:text-white">
                        </span>
                    </div>
                    </div>
                    <div class="h-50 ml-4 flex w-auto flex-col justify-center">
                    <p class="font-dm text-sm font-medium text-gray-600">Socket en Tiempo Real</p>
                    <h4 class="text-xl font-bold text-navy-700 dark:text-white">Socket.io</h4>
                    </div>
                </div>
                <div class="relative flex flex-grow !flex-row flex-col items-center rounded-[10px] rounded-[10px] border-[1px] border-gray-200 bg-white bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none">
                    <div class="ml-[18px] flex h-[90px] w-auto flex-row items-center">
                    <div class="rounded-full bg-lightPrimary p-3 dark:bg-navy-700">
                        <span class="flex items-center text-brand-500 dark:text-white">
                        </span>
                    </div>
                    </div>
                    <div class="h-50 ml-4 flex w-auto flex-col justify-center">
                    <p class="font-dm text-sm font-medium text-gray-600">Deploy</p>
                    <h4 class="text-xl font-bold text-navy-700 dark:text-white">Aws</h4>
                    </div>
                </div>
                </div> 
            <!-- dashboard de Diana hasta  aca  -->
        

<!-- dashboard de Oscar desde aca,  -->
                <div class="py-20">
        <div class="container">
            <div class="mx-auto max-w-4xl sm:text-center">
                <img src="assets/images/landing/index-21.png" class="w-40 mx-auto" alt="">
                <h2 class="md:text-5xl text-3xl font-semibold tracking-tight">¿Porque ocupar el Diagramador de Secuencia Online?</h2>
            </div>

            <div class="grid lg:grid-cols-3 md:grid-cols-2 grikd-cols-1 gap-6 mt-16">
                <div>
                    <div class="p-7 rounded-xl bg-amber-100 dark:bg-neutral-700/70">
                        <h3 class="text-xl font-semibold mb-7">Colaborativo</h3>
                        {{-- <p class="font-medium leading-7 text-gray-500 mb-6 dark:text-gray-400">Noc inventate algo aca </p> --}}
                    </div>
                </div>

                <div>
                    <div class="p-7 rounded-xl bg-emerald-100 dark:bg-neutral-700/70">
                        <h3 class="text-xl font-semibold mb-7">Facilida el Trabajo Remoto</h3>
                        {{-- <p class="font-medium leading-7 text-gray-500 mb-6 dark:text-gray-400">Inventate algo aca x2</p> --}}
                    </div>
                </div>

                <div>
                    <div class="p-7 rounded-xl bg-red-100 dark:bg-neutral-700/70">
                        <h3 class="text-xl font-semibold mb-7">Resguarda Informacion Importante</h3>
                        {{-- <p class="font-medium leading-7 text-gray-500 mb-6 dark:text-gray-400">Inventate algo aca x3.</p> --}}
                       
                    </div>
                </div>

                

                

                
            </div>
        </div>
        <!-- dashboard de Oscar hasta aca,  -->
    </div>
            </div>
</div>
        </div>
    </x-slot>


</x-app-layout>
