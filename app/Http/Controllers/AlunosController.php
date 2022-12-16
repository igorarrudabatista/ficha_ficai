<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public function create() {

    return view('alunos.form_alunos'    
    );}
    public function alunos() {

    return view('alunos.alunos'    
    );}
}
