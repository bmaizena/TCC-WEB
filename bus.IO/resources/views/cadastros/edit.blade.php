<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')

    <title>Edição de Dados</title>
    <link rel="shortcut icon" href="/logo-bus-cortado.png" type="image/x-icon">
</head>
<body class="bg-slate-100">

    <main class="flex justify-center">
        <section class="bg-zinc-100 mt-20 w-3/4 p-4 shadow-lg shadow-zinc-200 rounded-lg ">

        <h1 class="text-2xl text-blue-400 text-center">Editar Dados</h1>

        

            <form action="{{route('cadastros.update', $clientes->id)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="mt-4 flex flex-col">
                    <label for="name" class="text-blue-900">Nome:</label>
                    <input type="text" name="name" id="name" class="rounded-md border border-neutral-200 p-2" value="{{ @old('name', $clientes->name) }}">
                    @error('name')
                        <p class="text-muted text-red-400">{{ $message }}</p>
                    @enderror
                </div>


                <div class="mt-4 flex flex-col">
                    <label for="email" class="text-blue-900">Email:</label>
                    <input type="email" name="email" id="email" class="rounded-md border border-neutral-200 p-2" value="{{ @old('email', $clientes->email) }}">
                    @error('email')
                        <p class="text-muted text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4 flex flex-col">
                    <label for="telefone" class="text-blue-900">Telefone:</label>
                    <input type="telefone" name="telefone" id="telefone" class="rounded-md border border-neutral-200 p-2" value="{{ @old('telefone', $clientes->telefone) }}">
                    @error('telefone')
                        <p class="text-muted text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4 flex flex-col">
                    <label for="cpf" class="text-blue-900">CPF:</label>
                    <input type="cpf" name="cpf" id="cpf" class="rounded-md border border-neutral-200 p-2" value="{{ @old('cpf', $clientes->cpf) }}">
                    @error('cpf')
                        <p class="text-muted text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4 mt-4 flex justify-end gap-2">
                    
                    <input type="submit" value="Salvar Alterações" class = "rounded-md bg-cyan-500 p-2 text-indigo-50 shadow-md shadow-cyan-500/50 hover:bg-cyan-600 min-w-auto cursor-pointer"/>

                    <a href="/cadastros/acessoRestrito" class = "text-center rounded-md bg-red-600 p-2 text-red-50 shadow-md shadow-red-700/50 hover:bg-red-500 min-w-auto ">Cancelar</a>
                </div>
            </form>
        </section>
    </main>
    
</body>
</html>