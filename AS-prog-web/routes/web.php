<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PessoaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('animals', [AnimalController::class, 'index']);
Route::get('animals/create', [AnimalController::class, 'create'])->middleware(['auth', 'verified'])->name('create-animals');
Route::post('animals', [AnimalController::class, 'store'])->middleware(['auth', 'verified'])->name('store-animals');
Route::get('animals/{id}/edit', [AnimalController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit-animals');
Route::put('animals/{id}', [AnimalController::class, 'update'])->middleware(['auth', 'verified'])->name('update-animals');
Route::delete('animals/{id}', [AnimalController::class, 'destroy'])->middleware(['auth', 'verified'])->name('destroy-animals');

Route::get('carros', [CarroController::class, 'index']);
Route::get('carros/create', [CarroController::class, 'create'])->middleware(['auth', 'verified'])->name('create-carros');
Route::post('carros', [CarroController::class, 'store'])->middleware(['auth', 'verified'])->name('store-carros');
Route::get('carros/{id}/edit', [CarroController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit-carros');
Route::put('carros/{id}', [CarroController::class, 'update'])->middleware(['auth', 'verified'])->name('update-carros');
Route::delete('carros/{id}', [CarroController::class, 'destroy'])->middleware(['auth', 'verified'])->name('destroy-carros');

Route::get('empresas', [EmpresaController::class, 'index']);
Route::get('empresas/create', [EmpresaController::class, 'create'])->middleware(['auth', 'verified'])->name('create-empresas');
Route::post('empresas', [EmpresaController::class, 'store'])->middleware(['auth', 'verified'])->name('store-empresas');
Route::get('empresas/{id}/edit', [EmpresaController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit-empresas');
Route::put('empresas/{id}', [EmpresaController::class, 'update'])->middleware(['auth', 'verified'])->name('update-empresas');
Route::delete('empresas/{id}', [EmpresaController::class, 'destroy'])->middleware(['auth', 'verified'])->name('destroy-empresas');

Route::get('livros', [LivroController::class, 'index']);
Route::get('livros/create', [LivroController::class, 'create'])->middleware(['auth', 'verified'])->name('create-livros');
Route::post('livros', [LivroController::class, 'store'])->middleware(['auth', 'verified'])->name('store-livros');
Route::get('livros/{id}/edit', [LivroController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit-livros');
Route::put('livros/{id}', [LivroController::class, 'update'])->middleware(['auth', 'verified'])->name('update-livros');
Route::delete('livros/{id}', [LivroController::class, 'destroy'])->middleware(['auth', 'verified'])->name('destroy-livros');

Route::get('pedidos', [PedidoController::class, 'index']);
Route::get('pedidos/create', [PedidoController::class, 'create'])->middleware(['auth', 'verified'])->name('create-pedidos');
Route::post('pedidos', [PedidoController::class, 'store'])->middleware(['auth', 'verified'])->name('store-pedidos');
Route::get('pedidos/{id}/edit', [PedidoController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit-pedidos');
Route::put('pedidos/{id}', [PedidoController::class, 'update'])->middleware(['auth', 'verified'])->name('update-pedidos');
Route::delete('pedidos/{id}', [PedidoController::class, 'destroy'])->middleware(['auth', 'verified'])->name('destroy-pedidos');

Route::get('pessoas', [PessoaController::class, 'index']);
Route::get('pessoas/create', [PessoaController::class, 'create'])->middleware(['auth', 'verified'])->name('create-pessoas');
Route::post('pessoas', [PessoaController::class, 'store'])->middleware(['auth', 'verified'])->name('store-pessoas');
Route::get('pessoas/{id}/edit', [PessoaController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit-pessoas');
Route::put('pessoas/{id}', [PessoaController::class, 'update'])->middleware(['auth', 'verified'])->name('update-pessoas');
Route::delete('pessoas/{id}', [PessoaController::class, 'destroy'])->middleware(['auth', 'verified'])->name('destroy-pessoas');

require __DIR__.'/auth.php';
