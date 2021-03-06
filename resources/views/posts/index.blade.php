@extends('templates.base')
@section('titulo', 'Página Inicial')

@section('corpo')
    {{-- TÍTULO PRINCIPAL --}}
    <div class="row">
        <div class="col">
            <h1 class="text-center mt-2">A Taverna</h1>
        </div>
    </div>

    {{-- POST PRINCIPAL --}}
    {{-- <div class="row">
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
    </div> --}}

    @if(isset($posts[0]))
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 col">
                <div class="containerImgPrincipal ratio ratio-16x9">
                    <img src=" {{asset('capas/'.$posts[0]->capa)}} " alt="Imagem Postagem" class="h-100 w-100 postPrincipal">
                </div>
                <div class="textoPostPrincipal">
                    <a class="text-decoration-none link-secondary" href="{{ route('posts.post', $posts[0]) }}"><h1>{{$posts[0]->titulo}}</h1></a>
                    <div>{{$posts[0]->subtitulo}}</div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    @endif

    {{-- DOIS POSTS MAIS RECENTES --}}
    {{-- <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4 col-6">
            <div class="containerImgPrincipal ratio ratio-16x9">
                <img src=" {{asset('images/imagem.png')}} " alt="Imagem Postagem" class="h-100 w-100 postPrincipal">
            </div>
            <div class="textoPostPrincipal">
                <a class="text-decoration-none link-secondary" href="{{route('posts.post')}}"><h1>Título</h1></a>
            </div>
        </div>
        <div class="col-md-4 col-6">
            <div class="containerImgPrincipal ratio ratio-16x9">
                <img src=" {{asset('images/imagem.png')}} " alt="Imagem Postagem" class="h-100 w-100 postPrincipal">
            </div>
            <div class="textoPostPrincipal">
                <a class="text-decoration-none link-secondary" href="{{route('posts.post')}}"><h1>Título</h1></a>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div> --}}

    <div class="row">
        <div class="col-md-2"></div>

        @if(isset($posts[1]))
            <div class="col-md-4 col-6">
                <div class="containerImgPrincipal ratio ratio-16x9">
                    <img src=" {{asset('capas/'.$posts[1]->capa)}} " alt="Imagem Postagem" class="h-100 w-100 postPrincipal">
                </div>
                <div class="textoPostPrincipal">
                    <a class="text-decoration-none link-secondary" href="{{ route('posts.post', $posts[1]) }}"><h1>{{$posts[1]->titulo}}</h1></a>
                </div>
            </div>
        @endif

        @if(isset($posts[2]))
            <div class="col-md-4 col-6">
                <div class="containerImgPrincipal ratio ratio-16x9">
                    <img src=" {{asset('capas/'.$posts[2]->capa)}} " alt="Imagem Postagem" class="h-100 w-100 postPrincipal">
                </div>
                <div class="textoPostPrincipal">
                    <a class="text-decoration-none link-secondary" href="{{ route('posts.post', $posts[2]) }}"><h1>{{$posts[2]->titulo}}</h1></a>
                </div>
            </div>
        @endif

        <div class="col-md-2"></div>
    </div>

    <div class="row">
        <div class="col">
            <h2>Todos os posts:</h2>
        </div>
    </div>

    {{-- LISTAGEM COM VÁRIOS POSTS RECENTES --}}
    <div class="intercalar">
        {{-- <div class="row">
            <div class="col-md-3 col-5">
                <div class="containerImgPrincipal ratio ratio-16x9">
                    <img src=" {{asset('images/imagem.png')}} " alt="Imagem Postagem" class="h-100 w-100 postPrincipal">
                </div>
            </div>
            <div class="col">
                <div class="h-100 textoPostSecundario d-flex flex-column justify-content-center">
                    <a class="text-decoration-none link-secondary" href="{{route('posts.post')}}"><h1>Título</h1></a>
                    <div>Descrição</div>
                </div>
            </div>
        </div> --}}
        
        @for($i = 3; $i < 7; $i++)
            @if(isset($posts[$i]))
                <div class="row">
                    <div class="col-md-3 col-5">
                        <div class="containerImgPrincipal ratio ratio-16x9">
                            <img src=" {{asset('capas/'.$posts[$i]->capa)}} " alt="Imagem Postagem" class="h-100 w-100 postPrincipal">
                        </div>
                    </div>
                    <div class="col">
                        <div class="h-100 textoPostSecundario d-flex flex-column justify-content-center">
                            <a class="text-decoration-none link-secondary" href="{{route('posts.post', $posts[$i])}}"><h1>{{$posts[$i]->titulo}}</h1></a>
                            <div>Descrição</div>
                        </div>
                    </div>
                </div>
            @endif
        @endfor

    </div>

    {{-- LINK PARA A PÁGINA COM TODOS OS POSTS --}}
    <div class="row">
        <div class="col">  
            <a href=" {{route('posts')}} " class="link-primary">Mais posts</a>
        </div>
    </div>

@endsection