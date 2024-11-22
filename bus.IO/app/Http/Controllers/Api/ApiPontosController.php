<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pontos;
use Illuminate\Http\Request;

class ApiPontosController extends Controller
{
    public function index(){
        $pontos=Pontos::all();
        return $pontos->toJson();
    }
    public function destroy($id){

        $pontos = Pontos::findOrFail( $id);
        $pontos->delete();
    
        return redirect('/cadastros/pontos')->with('success', 'Tarefa excluida com sucesso');
    
    }

}
