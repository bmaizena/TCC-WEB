<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Ponto</title>
    <link rel="shortcut icon" href="/logo-bus-cortado.png" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        table {
            border-collapse: collapse;
            border-radius: 10px;
            margin: auto;
            box-shadow: 3px 3px 3px 5px rgb(0,0,0,2%);
            font-size:14px;
            width:90%;
            font-family: "Montserrat", sans-serif;
            
        }
        td{
            padding: 10px;
            
        }

        tr:nth-child(even) {
            background-color: rgb(192,192,192, 0.433);
        }

        tr:nth-child(odd) {
            background-color: rgb(192,192,192, 0.633);
        }

        tr:nth-last-child(1) td:nth-last-child(9) {
            border-radius: 0px 0px 0px 10px;
        }

        tr:nth-last-child(1) td:nth-last-child(1) {
            border-radius: 0px 0px 10px 0px;
        }

        .titulo{
            font-weight: bold;
            font-size:15px;
            padding: 5px;
        }
        #id {
            
            border-radius: 10px 0px 0px 0px;
        }
        #acoes {
            
            border-radius: 0px 10px 0px 0px;
        }
    </style>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-100 grid justify-items-center">

<main id="mainCad" class="bg-white grid justify-items-center rounded-2xl shadow-2xl relative border border-slate-50 mt-9">

    <form action="/cadastros/storePontos" method="POST" class=" flex flex-col bg-zinc-100 p-5 rounded-2xl shadow w-full">
        @csrf
        <h2 class="text-2xl text-center mb-4">Cadastro de Ponto</h2>

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

<a href="/dashboard" class = "text-center rounded-md bg-blue-600 p-2 mt-3 text-red-50 shadow-md shadow-blue-700/50 hover:bg-blue-500 ">Voltar</a>

<h2 class="text-2xl p-2 m-2 text-center">Lista de Pontos</h2>
        <table >
        
            <tr>
                <td class="titulo" id="id" style="background-color: #6fa9e3;">NOME</td>
                <td class="titulo" style="background-color: #76b0ea;">DESCRIÇÃO</td>
                <td class="titulo" style="background-color: #6fa9e3;">LAT</td>
                <td class="titulo" style="background-color: #76b0ea;">LONG</td>
                <td class="titulo" style="background-color: #6fa9e3;">PREV DE CHEGADA</td>
                <td class="titulo" style="background-color: #76b0ea;">PREV DE SAIDA</td>
                <td class="titulo" style="background-color: #6fa9e3;">HORARIOS</td>
                <td class="titulo" style="background-color: #76b0ea;">PREÇO</td>
                <td class="titulo" id="acoes" style="background-color: #73b464;">AÇÕES</td>
        
            </tr>

            @foreach ($pontos as $ponto)
           <tr> 
            <td>{{ $ponto['name'] }}</td>
            <td>{{ $ponto['description'] }}</td> 
            <td>{{ $ponto['latitude'] }}</td> 
            <td>{{ $ponto['longitude'] }}</td> 
            <td>{{ $ponto['arrivalPrediction'] }}</td> 
            <td>{{ $ponto['departurePrediction'] }}</td> 
            <td>{{ json_encode($ponto['schedules']) }}</td> 
            <td>{{ $ponto['fare'] }}</td> 
            <td class="text-center">

                
                <a class="inline-block" href="#" onclick="deleteId( {{$ponto-> id}} )">
                    <x-heroicon-o-trash class="w-7 m-1 text-red-500 hover:text-red-400"/>
                </a>
                <form class="d-none" id="form-destroy-{{$ponto->id}}" action="{{ route('pontos.destroy', $ponto->id ) }}" method="POST">
                    @csrf
                    @method('delete')
                </form>

            </td>

            </tr>
           @endforeach
           
        </table>
</body>
</html>


<script>
    function deleteId(id){
        if(confirm("Tem certeza que deseja EXCLUIR o registro?")){
            document.getElementById('form-destroy-'+id).submit();
        }
    }
</script>