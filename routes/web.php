<?php

use App\Http\Controllers\ComentariosController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsuariosController;
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

Route::get('/', [PostsController::class, 'index'])->name('index');

Route::get('/posts', [PostsController::class, 'posts'])->name('posts');

Route::get('/posts/inserir', [PostsController::class, 'create'])->name('posts.inserir')->middleware('auth');

Route::post('/posts/inserir', [PostsController::class, 'insert'])->name('posts.gravar')->middleware('auth');

Route::get('/posts/{post}', [PostsController::class, 'show'])->name('posts.post');

Route::post('/posts/{post}', [PostsController::class, 'show']);

Route::get('/posts/{post}/editar', [PostsController::class, 'edit'])->name('posts.edit')->middleware('auth');

Route::post('/posts/{post}/editar', [PostsController::class, 'update'])->name('posts.update')->middleware('auth');

Route::get('/posts/{post}/deletar', [PostsController::class, 'delete'])->name('posts.delete')->middleware('auth');

Route::post('/posts/{post}/deletar', [PostsController::class, 'remove'])->name('posts.remove')->middleware('auth');

Route::post('/posts/{post}/curtir', [PostsController::class, 'curtir'])->name('posts.curtir')->middleware('auth');

Route::get('/comentarios/{comentario}/deletar', [ComentariosController::class, 'delete'])->name('comentarios.delete')->middleware('auth');

Route::post('/comentarios/{comentario}/deletar', [ComentariosController::class, 'remove'])->name('comentarios.remove')->middleware('auth');


Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios.lista')->middleware('auth');

Route::get('/usuarios/cadastrar', [UsuariosController::class, 'create'])->name('usuarios.inserir');

Route::post('/usuarios/cadastrar', [UsuariosController::class, 'insert'])->name('usuarios.gravar');

Route::get('/usuarios/primeiro', function () {
    return redirect()->route('index');
})->name('conversas.lista');

Route::post('/usuarios/primeiro', [UsuariosController::class, 'primeiro'])->name('usuarios.primeiro');

Route::get('/usuarios/login', [UsuariosController::class, 'login'])->name('usuarios.login');

Route::post('/usuarios/login', [UsuariosController::class, 'login']);

Route::get('/usuarios/logout', [UsuariosController::class, 'logout'])->name('usuarios.logout')->middleware('auth');

Route::get('/usuarios/{usuario}/perfil', [UsuariosController::class, 'perfil'])->name('perfil');

Route::get('/usuarios/{usuario}/curtidas', [UsuariosController::class, 'curtidas'])->name('usuarios.curtidas');

Route::get('/usuarios/{usuario}/editar', [UsuariosController::class, 'edit'])->name('usuarios.edit')->middleware('auth');

Route::post('/usuarios/{usuario}/editar', [UsuariosController::class, 'update'])->name('usuarios.update')->middleware('auth');

Route::get('/usuarios/{usuario}/deletar', [UsuariosController::class, 'delete'])->name('usuarios.delete')->middleware('auth');

Route::post('/usuarios/{usuario}/deletar', [UsuariosController::class, 'remove'])->name('usuarios.remove')->middleware('auth');



// Route::get('/login', function () {
//     return view('usuarios.login');
// })->name('login');

// Route::get('/cadastro', function () {
//     return view('usuarios.cadastro');
// })->name('cadastro');

// Route::get('/perfil/editar', function () {
//     return view('usuarios.editarPerfil');
// })->name('perfil.editar');

// Route::get('/perfil/curtidas', function () {
//     return view('usuarios.perfilCurtidas');
// })->name('perfil.curtidas');

// Route::get('/excluir', function () {
//     return view('confirmar');
// })->name('excluir');

Route::get('/conversas', function () {
    return view('mensagens.listaConversas');
})->name('conversas.lista');

Route::get('/conversa', function () {
    return view('mensagens.conversa');
})->name('conversas.conversa');
