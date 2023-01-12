<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    
    public function index(){

        $nome = "Matheus";
        $idade = 29;

        $arr = ["Matheus", "Maria", "João", "Saulo"];

        return view('welcome',
        [
            'nome' => $nome,
            'idade2' => $idade,
            'profissao' => "programador",
            'arr' => $arr,
            'nomes' => $nome
        ]);
    }

    public function create() {
        return view('events.create');
    }

    public function contato() {
        return view('contact');
    }

    public function produtos() {

        $busca = request('search');

        return view('products', ['busca' => $busca]);
    }

}
