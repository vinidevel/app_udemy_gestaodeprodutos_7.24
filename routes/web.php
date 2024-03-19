<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\FornecedorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PrincipalController::class, 'index'])->name('site.index');

Route::get('/sobre-nos', [SobreNosController::class, 'index'])->name('site.sobrenos');

Route::get('/contato', [ContatoController::class, 'index'])->name('site.contato');
Route::post('/contato', [ContatoController::class, 'index'])->name('site.contato');

Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('teste
');



Route::get('/login', function(){
  return "Login.";
})->name('site.login');

Route::prefix('/app')->group(function(){

    Route::get('/clientes', function(){
        return "Clientes.";
      })->name('app.clientes');
    
      Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores
      ');
    
      Route::get('/produtos', function(){
        return "Produtos.";
      })->name('app.produtos');
});



  Route::get('/rota1', function(){
    echo "Rota 1";
  })->name('site.rota1');





