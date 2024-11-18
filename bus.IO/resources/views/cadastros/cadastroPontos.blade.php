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
            <x-input-label for="name" :value="__('Nome')"  />
            <x-text-input  id="name"  type="text" name="name" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="self-center w-max" >
            <x-input-label for="description" :value="__('Descrição')"  />
            <x-text-input  id="description"  type="text" name="description" required autofocus autocomplete="description" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
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
            <x-input-label for="arrivalPrediction" :value="__('Previsão de Chegada')"  />
            <x-text-input  id="arrivalPrediction"  type="text" name="arrivalPrediction" required autofocus autocomplete="arrivalPrediction" placeholder="Ex: 5 minutos" />
            <x-input-error :messages="$errors->get('arrivalPrediction')" class="mt-2" />
        </div>

        <div class="self-center w-max" >
            <x-input-label for="departurePrediction" :value="__('Previsão de Saída')"  />
            <x-text-input  id="departurePrediction"  type="text" name="departurePrediction" required autofocus autocomplete="departurePrediction" placeholder="Ex: 2 minutos" />
            <x-input-error :messages="$errors->get('departurePrediction')" class="mt-2" />
        </div>

        <div class="self-center w-max" >
            <x-input-label for="schedules" :value="__('Horários')"  />
            <x-text-input  id="schedules"  type="text" name="schedules" required autofocus autocomplete="schedules" placeholder="Ex: 7:15, 7:30, 7:45" />
            <x-input-error :messages="$errors->get('schedules')" class="mt-2" />
        </div>

        <div class="self-center w-max" >
            <x-input-label for="fare" :value="__('Preço da Passagem')"  />
            <x-text-input  id="fare"  type="text" name="fare" required autofocus autocomplete="fare" placeholder="Ex: R$2,50" />
            <x-input-error :messages="$errors->get('fare')" class="mt-2" />
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