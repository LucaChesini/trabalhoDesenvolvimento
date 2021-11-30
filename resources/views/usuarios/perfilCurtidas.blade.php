@extends('templates.base')
@section('titulo', 'Post')

@section('corpo')

    <div class="row">
        <div class="d-flex flex-row justify-content-center mt-2">
            <div class="containerImgPerfil ratio ratio-1x1">
                <img src=" {{asset('images/perfil.png')}} " alt="Perfil" class="rounded-circle border border-1 border-dark">
            </div>
        </div>
        <div class="text-center fs-3">Nome</div>
        <div class="d-flex flex-row justify-content-center mt-2">
            <div class="btn-group" role="group" aria-label="Botões para gerenciar a conta">
                <a role="button" href="#" class="btn btn-success">Editar</a>
                <a role="button" href="#" class="btn btn-danger">Apagar</a>
            </div>
        </div>
    </div>

    <div class="row">
        <hr class="my-4">
    </div>

    <div class="row">
        <div class="d-flex flex-row justify-content-center mt-2">
            <div class="btn-group" role="group" aria-label="Botões para trocar entre cometários e posts curtidos">
                <a role="button" href="{{route('perfil')}}" class="btn btn-outline-primary">Comentários</a>
                <a role="button" href="{{route('perfilCurtidas')}}" class="btn btn-outline-primary">Curtidas</a>
            </div>
        </div>
    </div>

    <div class="intercalar my-3">
        <div class="row">
            <div class="col-md-3 col-5">
                <div class="containerImgPrincipal ratio ratio-16x9">
                    <img src=" {{asset('images/imagem.png')}} " alt="Imagem Postagem" class="h-100 w-100 postPrincipal">
                </div>
            </div>
            <div class="col">
                <div class="h-100 textoPostSecundario d-flex flex-column justify-content-center">
                    <h1>Título</h1>
                    <div>Descrição</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-5">
                <div class="containerImgPrincipal ratio ratio-16x9">
                    <img src=" {{asset('images/imagem.png')}} " alt="Imagem Postagem" class="h-100 w-100 postPrincipal">
                </div>
            </div>
            <div class="col">
                <div class="h-100 textoPostSecundario d-flex flex-column justify-content-center">
                    <h1>Título</h1>
                    <div>Descrição</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-5">
                <div class="containerImgPrincipal ratio ratio-16x9">
                    <img src=" {{asset('images/imagem.png')}} " alt="Imagem Postagem" class="h-100 w-100 postPrincipal">
                </div>
            </div>
            <div class="col">
                <div class="h-100 textoPostSecundario d-flex flex-column justify-content-center">
                    <h1>Título</h1>
                    <div>Descrição</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-5">
                <div class="containerImgPrincipal ratio ratio-16x9">
                    <img src=" {{asset('images/imagem.png')}} " alt="Imagem Postagem" class="h-100 w-100 postPrincipal">
                </div>
            </div>
            <div class="col">
                <div class="h-100 textoPostSecundario d-flex flex-column justify-content-center">
                    <h1>Título</h1>
                    <div>Descrição</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-5">
                <div class="containerImgPrincipal ratio ratio-16x9">
                    <img src=" {{asset('images/imagem.png')}} " alt="Imagem Postagem" class="h-100 w-100 postPrincipal">
                </div>
            </div>
            <div class="col">
                <div class="h-100 textoPostSecundario d-flex flex-column justify-content-center">
                    <h1>Título</h1>
                    <div>Descrição</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-5">
                <div class="containerImgPrincipal ratio ratio-16x9">
                    <img src=" {{asset('images/imagem.png')}} " alt="Imagem Postagem" class="h-100 w-100 postPrincipal">
                </div>
            </div>
            <div class="col">
                <div class="h-100 textoPostSecundario d-flex flex-column justify-content-center">
                    <h1>Título</h1>
                    <div>Descrição</div>
                </div>
            </div>
        </div>
    </div>

@endsection