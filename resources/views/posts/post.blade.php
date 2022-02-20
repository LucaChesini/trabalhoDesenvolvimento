@extends('templates.base')
@section('titulo', 'Post')
@push('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush
@push('scripts')
    <script>
        $(function(){
            $('#curtir').click(function(){
                
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "{{route('posts.curtir', $post)}}",
                    type: "POST",
                    success: function(response){
                        $('#quantidade').html(response)
                    }
                })
            })
        })
    </script>
@endpush

@section('corpo')

    {{-- INÍCIO --}}
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col">
            <h1 class="ps-0">{{$post->titulo}}</h1>
            <div class="containerImgPrincipal ratio ratio-16x9">
                <img src=" {{asset('capas/'.$post->capa)}} " alt="Imagem Postagem" class="h-100 w-100 postPrincipal">
            </div>
            <p class="ps-0">{{$post->subtitulo}}</p>
        </div>
        <div class="col-md-1"></div>
    </div>

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col">
            <hr class="my-1">  
        </div>
        <div class="col-md-1"></div>
    </div>

    {{-- BOTÕES DE GERENCIAMENTO PARA ADMINISTRADOR --}}
    @if(Auth::user() && Auth::user()->cargo == 1)
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col">
                <div class="d-flex flex-row justify-content-around my-3">
                    <a role="button" href=" {{route('posts.edit', $post)}} " class="btn btn-success">Editar</a>
                    <a role="button" href=" {{route('posts.delete', $post)}} " class="btn btn-danger">Apagar</a>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col">
                <hr class="my-1">  
            </div>
            <div class="col-md-1"></div>
    </div>
    @endif

    {{-- CORPO --}}
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col">
            {{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, incidunt suscipit. Esse nulla sapiente ratione a odio dolorum tempore accusantium. Iste veniam voluptatem odio porro fugit facere assumenda, id in.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, incidunt suscipit. Esse nulla sapiente ratione a odio dolorum tempore accusantium. Iste veniam voluptatem odio porro fugit facere assumenda, id in.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, incidunt suscipit. Esse nulla sapiente ratione a odio dolorum tempore accusantium. Iste veniam voluptatem odio porro fugit facere assumenda, id in.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, incidunt suscipit. Esse nulla sapiente ratione a odio dolorum tempore accusantium. Iste veniam voluptatem odio porro fugit facere assumenda, id in.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, incidunt suscipit. Esse nulla sapiente ratione a odio dolorum tempore accusantium. Iste veniam voluptatem odio porro fugit facere assumenda, id in.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, incidunt suscipit. Esse nulla sapiente ratione a odio dolorum tempore accusantium. Iste veniam voluptatem odio porro fugit facere assumenda, id in.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, incidunt suscipit. Esse nulla sapiente ratione a odio dolorum tempore accusantium. Iste veniam voluptatem odio porro fugit facere assumenda, id in.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, incidunt suscipit. Esse nulla sapiente ratione a odio dolorum tempore accusantium. Iste veniam voluptatem odio porro fugit facere assumenda, id in.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, incidunt suscipit. Esse nulla sapiente ratione a odio dolorum tempore accusantium. Iste veniam voluptatem odio porro fugit facere assumenda, id in.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, incidunt suscipit. Esse nulla sapiente ratione a odio dolorum tempore accusantium. Iste veniam voluptatem odio porro fugit facere assumenda, id in.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, incidunt suscipit. Esse nulla sapiente ratione a odio dolorum tempore accusantium. Iste veniam voluptatem odio porro fugit facere assumenda, id in.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, incidunt suscipit. Esse nulla sapiente ratione a odio dolorum tempore accusantium. Iste veniam voluptatem odio porro fugit facere assumenda, id in.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, incidunt suscipit. Esse nulla sapiente ratione a odio dolorum tempore accusantium. Iste veniam voluptatem odio porro fugit facere assumenda, id in.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, incidunt suscipit. Esse nulla sapiente ratione a odio dolorum tempore accusantium. Iste veniam voluptatem odio porro fugit facere assumenda, id in.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, incidunt suscipit. Esse nulla sapiente ratione a odio dolorum tempore accusantium. Iste veniam voluptatem odio porro fugit facere assumenda, id in.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, incidunt suscipit. Esse nulla sapiente ratione a odio dolorum tempore accusantium. Iste veniam voluptatem odio porro fugit facere assumenda, id in.</p> --}}
            {!! $post->corpo !!}
        </div>
        <div class="col-md-1"></div>
    </div>

    {{-- CURTIR --}}
    <div class="row">
        <div class="col-1"></div>
        <div class="col">
            <button type="submit" id="curtir" name="curtir" class="btn" @if(!Auth::user()) disabled @endif><i class="bi bi-hand-thumbs-up"></i><span id="quantidade">{{$curtidas}}</span></button>
        </div>
        <div class="col-1"></div>
    </div>

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col">
            <hr class="my-1">  
        </div>
        <div class="col-md-1"></div>
    </div>

    {{-- POSTS À MOSTRA --}}
    <div class="row">
        <div class="col-md-2"></div>
        @if(isset($outrosPosts[0]))
            <div class="col-md-3 col-6">
                <div class="containerImgPrincipal ratio ratio-16x9">
                    <a class="text-decoration-none link-secondary" href="{{route('posts.post', $outrosPosts[0])}}">
                        <img src=" {{asset('capas/'.$outrosPosts[0]->capa)}} " alt="Imagem Postagem" class="h-100 w-100 postPrincipal">
                    </a>
                </div>
                <div class="textoPostPrincipal">
                    <a class="text-decoration-none link-secondary" href="{{route('posts.post', $outrosPosts[0])}}">
                        <h1>{{$outrosPosts[0]->titulo}}</h1>
                    </a>
                </div>
            </div>
        @endif

        <div class="col-md-2 d-md-block d-none"></div>

        @if(isset($outrosPosts[1]))
            <div class="col-md-3 col-6">
                <div class="containerImgPrincipal ratio ratio-16x9">
                    <a class="text-decoration-none link-secondary" href="{{route('posts.post', $outrosPosts[1])}}">
                        <img src=" {{asset('capas/'.$outrosPosts[1]->capa)}} " alt="Imagem Postagem" class="h-100 w-100 postPrincipal">
                    </a>
                </div>
                <div class="textoPostPrincipal">
                    <a class="text-decoration-none link-secondary" href="{{route('posts.post', $outrosPosts[1])}}">
                        <h1>{{$outrosPosts[1]->titulo}}</h1>
                    </a>
                </div>
            </div>
        @endif

            {{-- <div class="col-md-3 col-6">
                <div class="containerImgPrincipal ratio ratio-16x9">
                    <img src=" {{asset('images/teste.png')}} " alt="Imagem Postagem" class="h-100 w-100 postPrincipal">
                </div>
                <div class="textoPostPrincipal">
                    <h1>Título</h1>
                </div>
            </div> --}}

        <div class="col-md-2"></div>
    </div>

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col">
            <hr class="my-1">  
        </div>
        <div class="col-md-1"></div>
    </div>

    {{-- ESCREVER COMENTÁRIO --}}
    @if(Auth::user())
    {{-- Só permite usuários logados comentar --}}
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col">
                <h2>Deixar comentário:</h2>
                <form action="#" method="POST">
                    @csrf
                    <textarea name="comentario" id="comentario" class="tinymce" rows="10"></textarea>
                    <button class="btn btn-success mt-1" type="submit">Enviar</button>
                </form>
            </div>
            <div class="col-md-1"></div>
        </div>

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col">
                <hr class="my-1">  
            </div>
            <div class="col-md-1"></div>
        </div>

    @endif

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col">
            <h2>Comentários:</h2>
        </div>
        <div class="col-md-1"></div>
    </div>

    {{-- LISTAGEM DE COMENTÁRIOS --}}
    <div class="intercalar my-3">
        {{-- <div class="row">
            <div class="col">
                <div class="d-flex flex-column justify-content-start p-2">
                    <div class="d-flex flex-row justify-content-start align-items-center border-bottom pb-1">
                        <div class="containerPerfilComentario ratio ratio-1x1">
                            <img src=" {{asset('images/perfil.png')}} " alt="Perfil" class="rounded-circle border border-1 border-dark">
                        </div>
                        <div class="my-0 ms-3">Nome</div>
                    </div>
                    <div>
                        <div class="mb-0 mt-3 ms-5">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis quos ducimus distinctio, voluptatem libero impedit atque excepturi optio facere recusandae tempore, at delectus quas hic fugit veniam fugiat amet labore.</p>
                        </div>
                    </div>
                    <div>
                        <button type="submit" id="curtir" name="curtir" class="btn"><i class="bi bi-hand-thumbs-up"></i><span>100</span></button>
                    </div>
                    <div>
                        <button class="btn btn-danger">Apagar</button>
                    </div>
                </div>
            </div>
        </div> --}}

        @foreach($comentarios as $comentario)
            
            <div class="row">
                <div class="col">
                    <div class="d-flex flex-column justify-content-start p-2">
                        <div class="d-flex flex-row justify-content-start align-items-center border-bottom pb-1">
                            <div class="containerPerfilComentario ratio ratio-1x1">
                                <img src=" {{asset('perfil/'.$comentario->imagem)}} " alt="Perfil" class="rounded-circle border border-1 border-dark">
                            </div>
                            <div class="my-0 ms-3">{{$comentario->name}}</div>
                        </div>
                        <div>
                            <div class="mb-3 mt-3 ms-5">
                                <p>{!! $comentario->conteudo !!}</p>
                            </div>
                        </div>
                        {{-- Verifica se o comentário foi feito pelo usuário logado ou se o usuário logado é um administrador --}}
                        @if((Auth::user() && Auth::user()->id == $comentario->id_usuario) || (Auth::user() && Auth::user()->cargo == 1))
                            <div>
                                <a role="button" class="btn btn-danger" href="{{route('comentarios.delete', $comentario->id)}}">Apagar</a>
                            </div>
                        @endif
                        
                    </div>
                </div>
            </div>

        @endforeach

    </div>

@endsection