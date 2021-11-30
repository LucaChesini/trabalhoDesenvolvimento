@extends('templates.base')
@section('titulo', 'Posts')

@section('corpo')

    <div class="row my-3">
        <h2>Todos os posts:</h2>
    </div>

    {{-- BARRA DE PESQUISA --}}
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col my-2">
            <form action="#" method="POST" class="d-flex flex-row justify-content-center">
                <input type="text" name="busca" id="busca" placeholder="Buscar posts..." class="form-control">
                <button type="submit" class="btn btn-info"><i class="bi bi-search"></i></button>
            </form>
        </div>
        <div class="col-sm-2"></div>
    </div>

    {{-- POSTS --}}
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

    {{-- PAGINAÇÃO --}}
    <div class="row">
        <div class="d-flex flex-row justify-content-center">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#">Previous</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </div>
    </div>

@endsection