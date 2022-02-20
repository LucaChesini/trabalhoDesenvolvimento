@extends('templates.base')
@section('titulo', 'Perfil')

@section('corpo')
    {{-- IMAGEM E BOTÕES DE GERENCIAMENTO --}}
    <div class="row">
        <div class="col">
            <div class="d-flex flex-row justify-content-center mt-2">
                <div class="containerImgPerfil ratio ratio-1x1">
                    <img src=" {{asset('perfil/'.$usuario->imagem)}} " alt="Perfil" class="rounded-circle border border-1 border-dark">
                </div>
            </div>
            <div class="text-center fs-3">{{$usuario->name}}</div>
            @if(Auth::user() && (Auth::user()->id == $usuario->id))
                <div class="d-flex flex-row justify-content-center mt-2">
                    <div class="btn-group" role="group" aria-label="Botões para gerenciar a conta">
                        <a role="button" href="{{route('usuarios.update', $usuario)}}" class="btn btn-success">Editar</a>
                        <a role="button" href="{{route('usuarios.delete', $usuario)}}" class="btn btn-danger">Apagar</a>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col">
            <hr class="my-4">
        </div>
    </div>

    {{-- PÁGINAS DE PERFIL --}}
    <div class="row">
        <div class="col">
            <div class="d-flex flex-row justify-content-center mt-2">
                <div class="btn-group" role="group" aria-label="Botões para trocar entre cometários e posts curtidos">
                    <a role="button" href="{{route('perfil', $usuario)}}" class="btn btn-outline-primary">Comentários</a>
                    <a role="button" href="{{route('usuarios.curtidas', $usuario)}}" class="btn btn-outline-primary">Curtidas</a>
                </div>
            </div>
        </div>
    </div>

    {{-- LISTAGEM DE COMETÁRIOS --}}
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
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis quos ducimus distinctio, voluptatem libero impedit atque excepturi optio facere recusandae tempore, at delectus quas hic fugit veniam fugiat amet labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi autem sint ipsum quaerat repellendus ipsa assumenda laboriosam magnam nostrum doloribus optio excepturi maxime velit ad sunt corrupti, laborum rerum cumque!</p>
                        </div>
                    </div>
                    <div>
                        <a href="#" class="link-dark">Nome do post com link</a>
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
                            <div class="mb-0 mt-3 ms-5">
                                <p>{!! $comentario->conteudo !!}</p>
                            </div>
                        </div>
                        <div>
                            <a href="{{route('posts.post', $comentario->id)}}" class="link-dark">Post</a>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach

    </div>

@endsection