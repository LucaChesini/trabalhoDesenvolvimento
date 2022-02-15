<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Curtidas_posts;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::orderBy('id', 'desc')->get();

        return view('posts.index', ['posts' => $posts]);
    }

    public function posts(){
        $posts = Post::orderBy('id', 'desc')->get();

        return view('posts.posts', ['posts' => $posts]);
    }

    public function show(Post $post, Request $form){
        if($form->isMethod('post')){
            $comentario = new Comentario();

            $comentario->id_usuario = Auth::user()->id;
            $comentario->id_post = $post->id;
            $comentario->conteudo = $form->comentario;

            $comentario->save();
        }

        $comentarios = DB::table('comentarios')
                            ->join('posts', 'comentarios.id_post' , '=', 'posts.id')
                            ->join('usuarios', 'comentarios.id_usuario' , '=', 'usuarios.id')
                            ->select('usuarios.name', 'usuarios.imagem', 'comentarios.id', 'comentarios.id_usuario', 'comentarios.conteudo')
                            ->where('id_post', '=', $post->id)
                            ->orderBy('comentarios.id', 'desc')
                            ->get();

        $curtidas = DB::table('curtidas_posts')->where('id_post', '=', $post->id)->count();

        return view('posts.post', ['post' => $post, 'comentarios' => $comentarios, 'curtidas' => $curtidas]);
    }

    public function create(){
        return view('posts.create');
    }

    public function insert(Request $form){
        $post = new Post();

        $capaCaminho = $form->file('capa')->store('', 'capas');
        $slug = Str::of($form->titulo)->slug('-');

        $post->titulo = $form->titulo;
        $post->subtitulo = $form->subtitulo;
        $post->capa = $capaCaminho;
        $post->slug = $slug;
        $post->corpo = $form->corpo;
        $post->id_usuario = 1;

        $post->save();

        return redirect()->route('index');
    }

    public function edit(Post $post){
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $form, Post $post){
        if(isset($form->capa)){
            Storage::disk('capas')->delete($post->capa);
            $capaCaminho = $form->file('capa')->store('', 'capas');
            $post->capa = $capaCaminho;
        }

        $slug = Str::of($form->titulo)->slug('-');

        $post->titulo = $form->titulo;
        $post->subtitulo = $form->subtitulo;
        $post->slug = $slug;
        $post->corpo = $form->corpo;
        $post->id_usuario = 1;

        $post->save();

        return redirect()->route('index');
    }

    public function delete(Post $post){
        return view('posts.delete', ['post' => $post]);
    }

    public function remove(Post $post){
        Storage::disk('capas')->delete($post->capa);
        $post->delete();

        return redirect()->route('index');
    }

    public function curtir(Post $post){
        $curtida = new Curtidas_posts();

        $curtida->id_post = $post->id;
        $curtida->id_usuario = Auth::user()->id;

        $curtida->save();

        $query = DB::table('curtidas_posts')->where('id_post', '=', $post->id)->count();

        echo(json_encode($query));

        return;
    }
}
