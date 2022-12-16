<?php

use App\Http\Controllers\{

    HomeController,
    AlunosController,
    FichaController,
    PainelGerencialController
};
    
use Illuminate\Support\Facades\Route;

Route::get('/',                                     [HomeController::class,     'home']);

Route::get('Base/base',                             [HomeController::class,   'home' ]);

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//Alunos
Route::get('alunos/form_alunos',                    [AlunosController::class,   'create' ]);
Route::get('alunos/alunos',                    [AlunosController::class,   'alunos' ]);

// FICHA
Route::get('ficha/table',                           [FichaController::class,   'index' ]);

//Painel Gerencial - Cadastros
Route::get('painel/index',                           [PainelGerencialController::class,   'index' ]);
Route::get('painel/consulta_aluno',                  [PainelGerencialController::class,   'consulta_aluno' ]);
Route::get('painel/consulta_ficha',                  [PainelGerencialController::class,   'consulta_ficha' ]);



Route::get('painel/cadastro/index',                  [PainelGerencialController::class,   'cadastro_menu' ]);
Route::get('painel/cadastro/cadastro_aluno',         [PainelGerencialController::class,   'cadastro_aluno' ]);
Route::get('painel/cadastro/cadastro_categoria',     [PainelGerencialController::class,   'cadastro_categoria' ]);
Route::get('painel/cadastro/cadastro_conselho',      [PainelGerencialController::class,   'cadastro_conselho' ]);
Route::get('painel/cadastro/cadastro_escola',        [PainelGerencialController::class,   'cadastro_escola' ]);
Route::get('painel/cadastro/cadastro_ministerio',    [PainelGerencialController::class,   'cadastro_ministerio' ]);
Route::get('painel/cadastro/cadastro_polo',          [PainelGerencialController::class,   'cadastro_polo' ]);
Route::get('painel/cadastro/cadastro_prazo',         [PainelGerencialController::class,   'cadastro_prazo' ]);
Route::get('painel/cadastro/cadastro_serie',         [PainelGerencialController::class,   'cadastro_serie' ]);
