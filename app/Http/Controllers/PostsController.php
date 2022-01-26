<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::orderBy('id', 'desc')->get();

        return view('posts.index', ['posts' => $posts]);
    }

    public function posts(){
        return view('posts.posts');
    }

    public function show(Post $post){
        return view('posts.post', ['post' => $post]);
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
}
