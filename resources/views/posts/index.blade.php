@extends('templates.base')
@section('titulo', 'Página Inicial')

@section('corpo')

    <div class="row">
        <h1 class="text-center mt-2">A Taverna</h1>
    </div>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 col">
            <div class="containerImgPrincipal ratio ratio-16x9">
                <img src=" {{asset('images/imagem.png')}} " alt="Imagem Postagem" class="h-100 w-100 postPrincipal">
            </div>
            <div class="textoPostPrincipal">
                <a class="text-decoration-none link-secondary" href="{{route('post')}}"><h1>Título</h1></a>
                <div>Descrição</div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4 col-6">
            <div class="containerImgPrincipal ratio ratio-16x9">
                <img src=" {{asset('images/imagem.png')}} " alt="Imagem Postagem" class="h-100 w-100 postPrincipal">
            </div>
            <div class="textoPostPrincipal">
                <a class="text-decoration-none link-secondary" href="{{route('post')}}"><h1>Título</h1></a>
            </div>
        </div>
        <div class="col-md-4 col-6">
            <div class="containerImgPrincipal ratio ratio-16x9">
                <img src=" {{asset('images/imagem.png')}} " alt="Imagem Postagem" class="h-100 w-100 postPrincipal">
            </div>
            <div class="textoPostPrincipal">
                <a class="text-decoration-none link-secondary" href="{{route('post')}}"><h1>Título</h1></a>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

    <div class="row">
        <h2>Todos os posts:</h2>
    </div>

    <div class="intercalar">
        <div class="row">
            <div class="col-md-3 col-5">
                <div class="containerImgPrincipal ratio ratio-16x9">
                    <img src=" {{asset('images/imagem.png')}} " alt="Imagem Postagem" class="h-100 w-100 postPrincipal">
                </div>
            </div>
            <div class="col">
                <div class="h-100 textoPostSecundario d-flex flex-column justify-content-center">
                    <a class="text-decoration-none link-secondary" href="{{route('post')}}"><h1>Título</h1></a>
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
                    <a class="text-decoration-none link-secondary" href="{{route('post')}}"><h1>Título</h1></a>
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
                    <a class="text-decoration-none link-secondary" href="{{route('post')}}"><h1>Título</h1></a>
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
                    <a class="text-decoration-none link-secondary" href="{{route('post')}}"><h1>Título</h1></a>
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
                    <a class="text-decoration-none link-secondary" href="{{route('post')}}"><h1>Título</h1></a>
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
                    <a class="text-decoration-none link-secondary" href="{{route('post')}}"><h1>Título</h1></a>
                    <div>Descrição</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">  
        <a href=" {{route('posts')}} " class="link-primary">Mais posts</a>
    </div>

@endsection