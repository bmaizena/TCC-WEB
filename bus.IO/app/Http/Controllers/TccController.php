<?php

namespace App\Http\Controllers;

use App\Models\BusioClientes;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;


class TccController extends Controller
{
    // pag inicial de serviços
public function index(){
    $clientes=BusioClientes::all();

    $tasks = BusioClientes::where('user_id', '=', Auth::id())->get();

    $txtSrc = '';
    return view('cadastros.index', compact('clientes'));

}

//pag do formulário cadastro
public function cadastro(){
    return view('cadastros.cadastro');
}

public function login(){
    return view('cadastros.login');
}

public function acessoRestrito(){

    if(Gate::denies('is-admin')){
        dd('bloqueado');
    }
    $clientes=User::all();
    return view('cadastros.acessoRestrito', compact('clientes'));
}



/*public function recCadastro(Request $request){

    $rules = [
        'nome' => 'required|min:5',
        'dt_nasc' =>'required',
        'email' =>'required',
        'telefone' =>'required',
        'endereco' =>'required',
        'cpf' =>'required',
        'senha' =>'required'
    ];

    $validator = Validator::make($request->all(), $rules);

    if($validator->fails()){

        return redirect('cadastros/cadastro')->withInput()->withErrors($validator);
    }


    BusioClientes::create(
        $request->all()
    );
    return redirect('cadastros/cadastro') ->with('success', 'Cadastro feito com sucesso'); 
}


public function recRestrito(Request $request){

    $tcctasks = BusioClientes::where('senha', 'LIKE', "%projetotcc%") 
    ->where('email', 'LIKE', "%danielsallesse@gmail.com%")
    ->get();
    $txtSenha = $request->senha;
    $txtEmail = $request->email;

    $clientes=BusioClientes::all();

    return view('/cadastros/acessoRestrito', compact(['tcctasks','txtSenha','txtEmail', 'clientes']));
}*/

public function destroy($id){

    $clientes = User::findOrFail( $id);
    $clientes->delete();

    return redirect('/cadastros/acessoRestrito')->with('success', 'Tarefa excluida com sucesso');

}

public function edit($id){
    $clientes = User::findOrFail($id);
    return view('cadastros.edit', compact('clientes'));
}

public function update(Request $request, $id){
    $task = User::findOrFail($id);
    $task->update($request->all());
    return redirect('/cadastros/acessoRestrito');
}

}
