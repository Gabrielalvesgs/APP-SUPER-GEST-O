<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','PrincipalController@principal') ->name('site.inicio');

Route::get('/vendas','VendasController@vendas');

 Route::get('/Sobrenos','SobreNosController@Sobrenos') ->name ('site.Sobrenos');


 Route::get('/contato','ContatoController@contato') ->name ('site.contato');


Route:: get('/login', function () {return 'login'; });

Route:: prefix('/app') -> group(function() {
    Route:: get('/clientes', function () {return 'clientes'; });

    Route:: get('/fornecedores', function () {return 'fornecedores'; });

    Route:: get('/produtos', function () {return 'produtos'; });}
);

Route::get('/rota1', function () 
    {
        echo 'Rota 1';
    }

) ->name('site.rota1');

/*
Route::get('/rota2', function () 
    {
        echo 'Rota 2';
    }

) ->name('site.rota2'); */

#metodo redirect basicamente quando alguem acessar uma rota, ele vai retornar outra rota.
#exemplo: Rota 2, automaticamente venha pra rota 1. -->: Route::redirect('/rota2','/rota1')
Route::get('/Rota2', function ()
{
    return redirect ()->route('site.rota1');
}

);
/*
Route::fallback (function()
{
    echo 'Rota inexistente <a href="'.Route('site.inicio').'">Clique aqui</a> para voltar a pagina de inicio';
}

);*/

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('site.teste');


