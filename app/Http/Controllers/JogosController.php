<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function index()
    {
        $nome = 'fifa';
        $id =  '5';

        return view('jogos.index', ['nome'=>$nome, 'id'=>$id]);
    }
}