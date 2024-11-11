<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-zinc-300 grid justify-items-center">

<main id="mainCad" class="bg-white grid justify-items-center rounded-2xl shadow-2xl relative border border-slate-50 mt-9">

    <form action="/cadastros/storePontos" method="POST" class=" flex flex-col bg-slate-50 p-5 rounded-2xl shadow-md w-full">
        @csrf
        <h2 class="text-2xl font-bold font-mono text-center mb-4">Cadastre um Ponto:</h2>

        <div class="self-center w-max" >
            <x-input-label for="titulo" :value="__('Título')"  />
            <x-text-input  id="titulo"  type="text" name="titulo" required autofocus autocomplete="titulo" />
            <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
        </div>

        <div class="self-center w-max" >
            <x-input-label for="descricao" :value="__('Descrição')"  />
            <x-text-input  id="descricao"  type="text" name="descricao" required autofocus autocomplete="descricao" />
            <x-input-error :messages="$errors->get('descricao')" class="mt-2" />
        </div>

        <div class="self-center w-max" >
            <x-input-label for="latitude" :value="__('Latitude')"  />
            <x-text-input  id="latitude"  type="text" name="latitude" required autofocus autocomplete="latitude" />
            <x-input-error :messages="$errors->get('latitude')" class="mt-2" />
        </div>

        <div class="self-center w-max" >
            <x-input-label for="longitude" :value="__('Longitude')"  />
            <x-text-input  id="longitude"  type="text" name="longitude" required autofocus autocomplete="longitude" />
            <x-input-error :messages="$errors->get('longitude')" class="mt-2" />
        </div>

        <div class="self-center w-max" >
            <x-input-label for="bairro" :value="__('Bairro')"  />
            <x-text-input  id="bairro"  type="text" name="bairro" required autofocus autocomplete="bairro" />
            <x-input-error :messages="$errors->get('bairro')" class="mt-2" />
        </div>

        <div class="self-center w-max mt-3">
            <x-primary-button  class="border border-zinc-800 shadow-md rounded-lg p-1  cursor-pointer">
                {{ __('Adicionar') }}
            </x-primary-button>
        </div>
    </form>
</main>
</body>
</html>