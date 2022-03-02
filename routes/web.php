<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;

Route::prefix('/')->group(function(){
    Route::get('/', [ContactsController::class,'list'])->name('list'); // Listagem de contatos

    Route::get('detail/{id}',[ContactsController::class,'detail'])->name('detail'); // Detalhe do contato

    Route::get('add',[ContactsController::class,'add'])->name('add'); // Tela de adicão de novo contato
    Route::post('add',[ContactsController::class,'addAction']); // Ação de adiação de nova contato
    
    Route::get('edit/{id}',[ContactsController::class,'edit'])->name('edit'); // Tela de edição
    Route::post('edit/{id}',[ContactsController::class,'editAction']); // Ação de edição

    Route::get('delete/{id}',[ContactsController::class,'del'])->name('del'); // Tela de deleção 
});

