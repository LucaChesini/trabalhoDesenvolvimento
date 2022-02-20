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
        if(DB::table('usuarios')->exists()){
            $posts = Post::orderBy('id', 'desc')->get();

            return view('posts.index', ['posts' => $posts]);
        }else{
            return view('usuarios.primeiro'); //caso não exista nenhum usuário, passa para um formulário para criar um administrador
        }
    }

    public function posts(){
        $posts = Post::orderBy('id', 'desc')->paginate(10); //passa os posts com um limite que caso ultrapassado, cria links de paginação no final da página

        return view('posts.posts', ['posts' => $posts]);
    }

    public function show(Post $post, Request $form){
        if($form->isMethod('post')){
            $validate = $form->validate([
                'comentario' => ['required']
            ]);
            $comentario = new Comentario();

            $comentario->id_usuario = Auth::user()->id;
            $comentario->id_post = $post->id;
            $comentario->conteudo = $form->comentario;

            $comentario->save();
        }

        $outrosPosts = Post::orderBy('id', 'desc')->get();

        $comentarios = DB::table('comentarios')
                            ->join('posts', 'comentarios.id_post' , '=', 'posts.id')
                            ->join('usuarios', 'comentarios.id_usuario' , '=', 'usuarios.id')
                            ->select('usuarios.name', 'usuarios.imagem', 'comentarios.id', 'comentarios.id_usuario', 'comentarios.conteudo')
                            ->where('id_post', '=', $post->id)
                            ->orderBy('comentarios.id', 'desc')
                            ->get();

        $curtidas = DB::table('curtidas_posts')->where('id_post', '=', $post->id)->count();

        return view('posts.post', ['post' => $post, 'comentarios' => $comentarios, 'curtidas' => $curtidas, 'outrosPosts' => $outrosPosts]);
    }

    public function create(){
        if(Auth::user()->cargo == 1){
            return view('posts.create');
        }else{
            return redirect()->back();
        }
    }

    public function insert(Request $form){
        if(Auth::user()->cargo == 1){
            $validate = $form->validate([
                'titulo' => ['required'],
                'subtitulo' => ['required'],
                'corpo' => ['required'],
                'capa' => 'required|mimes:jpg,png'
            ]);
            $post = new Post();

            $capaCaminho = $form->file('capa')->store('', 'capas'); //salva a imagem e o seu caminho
            $slug = Str::of($form->titulo)->slug('-'); //cria uma slug do titulo

            $post->titulo = $form->titulo;
            $post->subtitulo = $form->subtitulo;
            $post->capa = $capaCaminho;
            $post->slug = $slug;
            $post->corpo = $form->corpo;
            $post->id_usuario = Auth::user()->id;

            $post->save();

            return redirect()->route('index');
        }else{
            return redirect()->back();
        }
    }

    public function edit(Post $post){
        if(Auth::user()->cargo == 1){
            return view('posts.edit', ['post' => $post]);
        }else{
            return redirect()->back();
        }
    }

    public function update(Request $form, Post $post){
        if(Auth::user()->cargo == 1){
            $validate = $form->validate([
                'titulo' => ['required'],
                'subtitulo' => ['required'],
                'corpo' => ['required'],
                'capa' => ['mimes:jpg,png']
            ]);
            if(isset($form->capa)){
                // se o usuário mandar uma imagem nova, deleta a antiga e salva a nova
                Storage::disk('capas')->delete($post->capa);
                $capaCaminho = $form->file('capa')->store('', 'capas');
                $post->capa = $capaCaminho;
            }

            $slug = Str::of($form->titulo)->slug('-');

            $post->titulo = $form->titulo;
            $post->subtitulo = $form->subtitulo;
            $post->slug = $slug;
            $post->corpo = $form->corpo;
            $post->id_usuario = Auth::user()->id;

            $post->save();

            return redirect()->route('posts.post', $post);
        }else{
            return redirect()->back();
        }
    }

    public function delete(Post $post){
        if(Auth::user()->cargo == 1){
            return view('posts.delete', ['post' => $post]);
        }else{
            return redirect()->back();
        }
    }

    public function remove(Post $post){
        if(Auth::user()->cargo == 1){
            // deleta o post e todas as imagens, comentarios e curtidas relacionadas a ele
            Storage::disk('capas')->delete($post->capa);
            DB::table('comentarios')->where('id_post', '=', $post->id)->delete();
            DB::table('curtidas_posts')->where('id_post', '=', $post->id)->delete();
            $post->delete();

            return redirect()->route('index');
        }else{
            return redirect()->back();
        }
    }

    public function curtir(Post $post){
        if(DB::table('curtidas_posts')->where('id_post', '=', $post->id)->where('id_usuario', '=', Auth::user()->id)->exists()){
            // se o usuario já tiver curtido o post, a curtida existente será deletada
            DB::table('curtidas_posts')->where('id_post', '=', $post->id)->where('id_usuario', '=', Auth::user()->id)->delete();

            $query = DB::table('curtidas_posts')->where('id_post', '=', $post->id)->count();

            echo(json_encode($query));

            return;
        }else{
            // se o usuário não tiver curtido o post, a curtida será registrada
            $curtida = new Curtidas_posts();

            $curtida->id_post = $post->id;
            $curtida->id_usuario = Auth::user()->id;

            $curtida->save();

            $query = DB::table('curtidas_posts')->where('id_post', '=', $post->id)->count();

            echo(json_encode($query));

            return;
        }
    }
}
