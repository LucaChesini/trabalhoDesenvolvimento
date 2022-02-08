<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentariosController extends Controller
{
    public function delete(Comentario $comentario){
        return view('comentarios.delete', ['comentario' => $comentario]);
    }

    public function remove(Comentario $comentario){
        $comentario->delete();

        return redirect()->route('index');
    }
}
