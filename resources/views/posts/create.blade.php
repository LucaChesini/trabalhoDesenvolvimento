@extends('templates.base')
@section('titulo', 'Escrever Posts')

@section('corpo')

    <div class="row">
        <div class="col">
            <h1 class="text-center mt-2">Criar Postagem</h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <form action="{{route('posts.gravar')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="titulo" class="form-label">Titulo:</label>
                    <input type="text" class="form-control" id="titulo" name="titulo">
                </div>
                <div class="mb-3">
                    <label for="subtitulo" class="form-label">Subtitulo:</label>
                    <input type="text" class="form-control" id="subtitulo" name="subtitulo">
                </div>
                <div class="mb-3">
                    <label for="capa" class="form-label">Imagem de capa:</label>
                    <input type="file" class="form-control" id="capa" name="capa">
                </div>
                <div class="mb-3">
                    <label for="corpo" class="form-label">Corpo:</label>
                    <textarea class="form-control tinymce" id="corpo" rows="20" name="corpo"></textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </form>
        </div>
    </div>

@endsection