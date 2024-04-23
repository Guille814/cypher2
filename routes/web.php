<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\PostController; // Asegúrate de importar el controlador de publicaciones

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Mi perfil
Route::get('/perfil', [PerfilController::class, 'mostrarPerfil'])->name('perfil');

// Creación de Post
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

// Mostrar formulario de posts
Route::get('/crear-post', [PostController::class, 'showCreatePostForm'])->name('crear.post');



