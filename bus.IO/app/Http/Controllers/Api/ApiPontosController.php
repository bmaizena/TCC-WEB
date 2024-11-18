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

}
