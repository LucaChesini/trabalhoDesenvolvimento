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

Route::get('/', function () {
    return view('posts.index');
})->name('index');

Route::get('/posts', function () {
    return view('posts.posts');
})->name('posts');

Route::get('/post', function () {
    return view('posts.post');
})->name('post');

Route::get('/login', function () {
    return view('usuarios.login');
})->name('login');

Route::get('/cadastro', function () {
    return view('usuarios.cadastro');
})->name('cadastro');

Route::get('/perfil/editar', function () {
    return view('usuarios.editarPerfil');
})->name('perfil.editar');

Route::get('/perfil', function () {
    return view('usuarios.perfil');
})->name('perfil');

Route::get('/perfil/curtidas', function () {
    return view('usuarios.perfilCurtidas');
})->name('perfil.curtidas');

Route::get('/posts/inserir', function () {
    return view('posts.create');
})->name('inserir.posts');

Route::get('/lista', function () {
    return view('usuarios.contas');
})->name('listaContas');

Route::get('/excluir', function () {
    return view('confirmar');
})->name('excluir');

Route::get('/conversas', function () {
    return view('mensagens.listaConversas');
})->name('conversas.lista');

Route::get('/conversa', function () {
    return view('mensagens.conversa');
})->name('conversas.conversa');
