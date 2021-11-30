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
                <a role="button" href="{{route('cadastro')}}" class="btn btn-success">Editar</a>
                <a role="button" href="{{route('excluir')}}" class="btn btn-danger">Apagar</a>
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
        <div class="row">
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
                    <a href="#" class="link-dark">Nome do post com link</a>
                </div>
            </div>
        </div>
        <div class="row">
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
                    <a href="#" class="link-dark">Nome do post com link</a>
                </div>
            </div>
        </div>
    </div>

@endsection