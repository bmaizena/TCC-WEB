<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    @vite('resources/css/app.css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        body{
            text-align: center;
            font-family: "Montserrat", sans-serif;
        }
        table {
            border-collapse: collapse;
            border-radius: 10px;
            margin: auto;
            box-shadow: 3px 3px 3px 5px rgb(0,0,0,2%);
            font-size:14px;
            width:90%;
            
        }
        td{
            padding: 5px 3px 5px 3px;
            
        }

        tr:nth-child(even) {
            background-color: rgb(192,192,192, 0.433);
        }

        tr:nth-child(odd) {
            background-color: rgb(192,192,192, 0.633);
        }

        tr:nth-last-child(1) td:nth-last-child(6) {
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
</head>
<body>


        
        <h2 class="text-2xl font-bold p-2 m-2 text-center">Lista de Usuarios</h2>
        <table >
        
            <tr>
                <td class="titulo" id="id" style="background-color: #76b0ea;">ID</td>
                <td class="titulo" style="background-color: #6fa9e3;">NOME</td>
                <td class="titulo" style="background-color: #76b0ea;">TEL</td>
                <td class="titulo" style="background-color: #6fa9e3;">EMAIL</td>
                <td class="titulo" style="background-color: #76b0ea;">CPF</td>
                <td class="titulo" id="acoes" style="background-color: #73b464;" id="acoes">AÇÕES</td>
        
            </tr>

            @foreach ($clientes as $cliente)
           <tr> 
            <td>{{ $cliente['id'] }}</td>
            <td>{{ $cliente['name'] }}</td> 
            <td>{{ $cliente['telefone'] }}</td> 
            <td>{{ $cliente['email'] }}</td> 
            <td>{{ $cliente['cpf'] }}</td> 

            <td class="text-center">
                <a class="inline-block" href="{{route('cadastros.edit', $cliente->id)}}" >
                    <x-eva-edit-2-outline class=" w-7 m-1 text-ambar-500 hover:text-slate-400"/>
                </a>
                
                <a class="inline-block" href="#" onclick="deleteId( {{$cliente-> id}} )">
                    <x-heroicon-o-trash class="w-7 m-1 text-red-500 hover:text-red-400"/>
                </a>
                <form class="d-none" id="form-destroy-{{$cliente->id}}" action="{{ route('cadastros.destroy', $cliente->id ) }}" method="POST">
                    @csrf
                    @method('delete')
                </form>

            </td>
            </tr>
           @endforeach
           
        </table>
        <br>
        <a href="/dashboard" class = "text-center rounded-md bg-blue-600 p-2 text-red-50 shadow-md shadow-blue-700/50 hover:bg-blue-500 ">Voltar</a>

        <br>

        @include('components.flashmessages')
    
    
</body>
</html>


<script>
    function deleteId(id){
        if(confirm("Tem certeza que deseja EXCLUIR o registro?")){
            document.getElementById('form-destroy-'+id).submit();
        }
    }
</script>

<script>
    const target = document.getElementById("alertDiv");
    function hide(){
        target.style.opacity = '0'
        target.style.display = 'none';
    }
    window.onload = setInterval(() => hide(), 3000)
</script>