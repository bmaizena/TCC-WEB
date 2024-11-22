<?php

namespace App\Http\Controllers;

use App\Models\BusioClientes;
use App\Models\User;
use App\Models\Pontos;
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

//controle do acessoRestrito
public function acessoRestrito(){

    if(Gate::denies('is-admin')){
        dd('bloqueado');
    }
    $clientes=User::all();
    return view('cadastros.acessoRestrito', compact('clientes'));
}

//pag cadastro dos pontos
public function cadastroPontos(){

    if(Gate::denies('is-admin')){
        dd('bloqueado');
    }
    $pontos=Pontos::all();
    return view('cadastros.cadastroPontos',compact('pontos'));
}

//func para adicionar pontos
public function storePontos(Request $request){
    if(Gate::denies('is-admin')){
        dd('bloqueado');
    }
    
    $schedulesArray = explode(',', $request->schedules);
    $schedulesArray = array_map('trim', $schedulesArray);

    Pontos::create(
        [
            'name' => $request->name,
            'description' => $request->description,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'arrivalPrediction' => $request->arrivalPrediction,
            'departurePrediction' => $request->departurePrediction,
            'schedules' => $schedulesArray, // Laravel salva como JSON devido ao cast
            'fare' => $request->fare,
        ]
        );
    return redirect('/cadastros/pontos');
}


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
