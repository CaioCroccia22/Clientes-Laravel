<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $id = '4';
        $usuario = 'Ana Beatriz';

        $dados = [
            'id' => $id,
            'usuario' => $usuario
        ];

        return view('home', $dados);
    }
}
