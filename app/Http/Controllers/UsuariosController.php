<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UsuariosController extends Controller
{
    public function index(){
        $usuarios = Usuario::orderBy('id', 'desc')->get();

        return view('usuarios.contas', ['usuarios' => $usuarios]);
    }

    public function perfil(Usuario $usuario){
        // junta as tabelas por meio das foreign keys
        $comentarios = DB::table('comentarios')
                            ->join('posts', 'comentarios.id_post' , '=', 'posts.id')
                            ->join('usuarios', 'comentarios.id_usuario' , '=', 'usuarios.id')
                            ->select('usuarios.name', 'usuarios.imagem', 'posts.id', 'comentarios.id_usuario', 'comentarios.conteudo')
                            ->where('comentarios.id_usuario', '=', $usuario->id)
                            ->orderBy('comentarios.id', 'desc')
                            ->get();

        return view('usuarios.perfil', ['usuario' => $usuario, 'comentarios' => $comentarios]);
    }

    public function curtidas(Usuario $usuario){
        // junta as tabelas por meio das foreign keys
        $posts = DB::table('curtidas_posts')
                            ->join('posts', 'curtidas_posts.id_post' , '=', 'posts.id')
                            ->join('usuarios', 'curtidas_posts.id_usuario' , '=', 'usuarios.id')
                            ->select('posts.id', 'posts.titulo', 'posts.subtitulo', 'posts.capa')
                            ->where('curtidas_posts.id_usuario', '=', $usuario->id)
                            ->orderBy('curtidas_posts.id', 'desc')
                            ->get();

        return view('usuarios.curtidas', ['usuario' => $usuario, 'posts' => $posts]);
    }

    public function create(){
        return view('usuarios.cadastro');
    }

    public function insert(Request $form){
        $validate = $form->validate([
            'usuario' => ['required'],
            'email' => ['required'],
            'senha' => ['required'],
            'senhaConfirm' => ['required'],
            'imgPerfil' => 'required|mimes:jpg,png'
        ]);

        if($form->senha == $form->senhaConfirm){

            $usuario = new Usuario();
            
            
            $perfilCaminho = $form->file('imgPerfil')->store('', 'perfil');

            $usuario->name = $form->usuario;
            $usuario->email = $form->email;
            $usuario->imagem = $perfilCaminho;
            $usuario->password = Hash::make($form->senha);
            $usuario->cargo = 0;

            $usuario->save();
            
            return redirect()->route('index');

        }else{
            return redirect()->back();
        }
    }
    
    public function primeiro(Request $form){
        // só permite o funcionamento do formulário caso ainda não exista um usuário
        if(!DB::table('usuarios')->exists()){
            $validate = $form->validate([
                'usuario' => ['required'],
                'email' => ['required'],
                'senha' => ['required'],
                'senhaConfirm' => ['required'],
                'imgPerfil' => 'required|mimes:jpg,png'
            ]);

            if($form->senha == $form->senhaConfirm){

                $usuario = new Usuario();
                
                
                $perfilCaminho = $form->file('imgPerfil')->store('', 'perfil');

                $usuario->name = $form->usuario;
                $usuario->email = $form->email;
                $usuario->imagem = $perfilCaminho;
                $usuario->password = Hash::make($form->senha);
                $usuario->cargo = 1;

                $usuario->save();
                
                return redirect()->route('index');

            }else{
                return redirect()->back();
            }
        }else{
            return redirect()->route('index');
        }
    }

    public function edit(Usuario $usuario){
        // só permite a edição caso o usuario selecionado seja o mesmo que está logado
        if(Auth::user()->id == $usuario->id){
            return view('usuarios.edit', ['usuario' => $usuario]);
        }else{
            return redirect()->back();
        }
    }

    public function update(Request $form, Usuario $usuario){
        if(Auth::user()->id == $usuario->id){
            $validate = $form->validate([
                'email' => ['required'],
                'usuario' => ['required'],
                'imgPerfil' => ['mimes:jpg,png']
            ]);

            if(isset($form->imgPerfil)){
                Storage::disk('perfil')->delete($usuario->imagem);
                $perfilCaminho = $form->file('imgPerfil')->store('', 'perfil');
                $usuario->imagem = $perfilCaminho;
            }

            $usuario->name = $form->usuario;
            $usuario->email = $form->email;

            $usuario->save();
            
            return redirect()->route('perfil', $usuario);
        }else{
            return redirect()->back();
        }
    }

    public function delete(Usuario $usuario){
        if((Auth::user()->id == $usuario->id) || (Auth::user()->cargo == 1)){
            return view('usuarios.delete', ['usuario' => $usuario]);
        }else{
            return redirect()->back();
        }
    }

    public function remove(Usuario $usuario){
        if((Auth::user()->id == $usuario->id) || (Auth::user()->cargo == 1)){
            //deleta o usuário e tudo relacionado a ele do site
            Storage::disk('perfil')->delete($usuario->imagem);
            DB::table('comentarios')->where('id_usuario', '=', $usuario->id)->delete();
            DB::table('curtidas_posts')->where('id_usuario', '=', $usuario->id)->delete();
            $posts = DB::table('posts')->where('id_usuario', '=', $usuario->id)->get();
            foreach($posts as $post){
                //busca todas as imagens relacionadas aos posts e as deleta
                Storage::disk('capas')->delete($post->capa);
            }
            DB::table('posts')->where('id_usuario', '=', $usuario->id)->delete();
            $usuario->delete();

            return redirect()->route('index');
        }else{
            return redirect()->back();
        }
    }

    public function login(Request $form){
        if($form->isMethod('post')){

            $credenciais = $form->validate([
                'email' => ['required'],
                'password' => ['required']
            ]);

            if(Auth::attempt($credenciais)){
                session()->regenerate();
                return redirect()->route('index');
            }else{
                return redirect()->route('usuarios.login');
            }
        }

        return view('usuarios.login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }
}
