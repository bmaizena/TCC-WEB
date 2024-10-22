<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        body{
            margin:0;
            padding: 0;
            font-family: "Montserrat", sans-serif;
        }

        
    </style>
    @vite('resources/css/app.css')
</head>
<body class="bg-zinc-300 grid justify-items-center">


<main id="mainCad" class=" bg-gradient-to-r from-blue-950 to-blue-700 grid justify-items-end rounded-2xl shadow-2xl relative border border-slate-50 mt-9">
    <div class="absolute top-6 left-8 ">
        <h1 class="font-thin text-6xl text-slate-50 ml-3">BUS.IO</h1>
        <p class="font-thin text-lg text-slate-50 ml-1">Seu ônibus na palma da sua mão</p>
    </div>
    <div id="imagem"class="absolute top-12 left-10">
        <img src="/bus.io.png" alt="bus" class="w-10/12 ml-1 mt-2 animate-pulse">
    </div>


    <form id="formulario" method="POST" action="{{ route('register') }}" class=" flex flex-col bg-slate-50 p-5 rounded-2xl shadow-md w-7/12 ml-4 ">
        @csrf
        <h2 class="text-2xl font-bold font-mono text-center mb-4">Cadastre-se</h2>

        <div class="self-center w-max" >
            <x-input-label for="name" :value="__('Nome')"  />
            <x-text-input  id="name"  type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
    
    
        <div class="self-center w-max" >
            <x-input-label for="email" :value="__('Email')"  />
            <x-text-input  id="email"  type="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
    
    
        <div class="self-center w-max" >
            <x-input-label for="telefone" :value="__('Telefone')"  />
            <x-text-input  id="telefone"  type="text" name="telefone" :value="old('telefone')" required autofocus autocomplete="telefone" />
            <x-input-error :messages="$errors->get('telefone')" class="mt-2" />
        </div>

        <div class="self-center w-max" >
            <x-input-label for="cpf" :value="__('CPF')"  />
            <x-text-input  id="cpf"  type="text" name="cpf" :value="old('cpf')" required autofocus autocomplete="cpf" />
            <x-input-error :messages="$errors->get('cpf')" class="mt-2" />
        </div>

        <div class="self-center w-max">
            <x-input-label for="password" :value="__('Senha')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="self-center w-max">
            <x-input-label for="password_confirmation" :value="__('Confirmar Senha')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="self-center w-max mt-3">
            <x-primary-button  class="border border-zinc-800 shadow-md rounded-lg p-1  cursor-pointer bg-gradient-to-r from-blue-950 to-blue-700 hover:from-blue-700 hover:to-blue-950  text-slate-50  hover:text-green-500 transition duration-300 delay-150 hover:delay-300 ">
                {{ __('Cadastrar') }}
            </x-primary-button>
        </div>

        <div class="self-center w-max">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Já tem Cadastro?') }}
            </a>
        </div>
    
        <br>
        <p class="self-center hover:text-cyan-500"><a href="/"><b>Página Inicial</b></a></p>

        

    </form>
</main>

@include('components.flashmessages')

<br>


</body>
</html>

<script>
    const target = document.getElementById("alertDiv");
    function hide(){
        target.style.opacity = '0'
        target.style.display = 'none';
    }
    window.onload = setInterval(() => hide(), 3000)
</script>