<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    public function index(){
        $usuarios = Usuario::orderBy('id', 'desc')->get();

        return view('usuarios.contas', ['usuarios' => $usuarios]);
    }

    public function perfil(Usuario $usuario){
        return view('usuarios.perfil', ['usuario' => $usuario]);
    }

    public function create(){
        return view('usuarios.cadastro');
    }

    public function insert(Request $form){
        $usuario = new Usuario();

        $perfilCaminho = $form->file('imgPerfil')->store('', 'perfil');

        $usuario->name = $form->usuario;
        $usuario->email = $form->email;
        $usuario->imagem = $perfilCaminho;
        $usuario->password = Hash::make($form->senha);
        $usuario->cargo = 0;

        $usuario->save();

        return redirect()->route('index');
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
