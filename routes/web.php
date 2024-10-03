<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

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

// Acessando a controller com Resource
Route::resource('/', ProdutoController::class);






// Route::get('/', [ProdutoController::class, 'index'])->name('home');

// Route::get('/produto/{id?}', [ProdutoController::class, 'show'])->name('produto.show');

// grupos de rotas - pelo prefixo
// Route::prefix('admin')->group(function () {
//     Route::get('dashboard', function () {
//         return 'Página principal do app';
//     });

//     Route::get('profile', function () {
//         return 'Página de perfil';
//     });

//     Route::get('about', function () {
//         return 'Sobre';
//     });
// });

// grupos de rotas - pelo name - melhor prática
//Route::name('admin.')->group(function () {
    // Route::get('admin/dashboard', function () {
        // return 'Página principal do app';
    // })->name('dashboard');

    // Route::get('admin/profile', function () {
      //  return 'Página de perfil';
    //})->name('profile');

    //Route::get('admin/about', function () {
//return 'Sobre';
    //})->name('about');
//});

// Route::get('/hello', function () {
//     return view('hello');
// });

// // passando parametros para a view
// Route::get('/hello/{name?}', function ($name = '') {
//     return view('hello', ['name' => $name]);
// });

// // redirecionamento
// Route::get('/sobre', function () {
//     return redirect('/hello');
// });

// // ou
// // Route::redirect('/sobre', '/hello');

// // rotas nomeadas
// Route::get('/contato', function () {
//     return 'Contato';
// })->name('contact');
