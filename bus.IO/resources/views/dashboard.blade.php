<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Perfil') }}
        </h2>
    </x-slot>

    @can('is-admin')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Página do Administrador') }}
        </h2>
    </x-slot>
    @endcan
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Você esta logado!") }}
                </div>    
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-2">
                
                <div class="p-6 text-gray-900 flex items-center ">
                    <a href="/" class="hover:text-blue-400">
                        Ir para Página Inicial
                    </a>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-2">
                
                <div class="p-6 text-gray-900 flex items-center ">
                    <a href="exp://192.168.86.49:8081" class="hover:text-blue-400">
                        Ir para Aplicativo(se estiver usando dispositivo móvel)📱
                    </a>
                </div>
            </div>

            @can('is-admin')
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-2"> 
                <div class="p-6 text-gray-900 flex items-center ">
                    <a href="/cadastros/acessoRestrito" class="hover:text-blue-400">Lista de Usuarios🧑‍🦰👩‍🦰</a>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-2">
                <div class="p-6 text-gray-900 flex items-center ">
                    <a href="/cadastros/pontos" class="hover:text-blue-400">Cadastrar Pontos🚏</a>
                </div>
            </div>
            @endcan
        </div>
    </div>
</x-app-layout>
