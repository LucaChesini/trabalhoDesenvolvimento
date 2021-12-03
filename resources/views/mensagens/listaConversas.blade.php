@extends('templates.base')
@section('titulo', 'Conversas')

@section('corpo')

    <div class="row">
        <div class="col">
            <h1>Todas as conversas:</h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <hr class="my-1">
        </div>
    </div>

    {{-- LISTAGEM COM CONVERSAS DO USUÁRIO --}}
    <div class="intercalar">
        <div class="row">
            <div class="col">
                <a href="{{route('conversas.conversa')}}" class="text-decoration-none">
                    <div class="d-flex flex-column justify-content-between py-2">
                            <div class="d-flex flex-row justify-content-start align-items-center">
                                <div class="containerPerfilComentario ratio ratio-1x1">
                                    <img src=" {{asset('images/perfil2.png')}} " alt="Perfil" class="rounded-circle border border-1 border-dark">
                                </div>
                                <p class="my-0 ms-3 text-dark">Nome</p>
                            </div>
                        <div>
                            <p class="text-secondary">Mensagem</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <a href="{{route('conversas.conversa')}}" class="text-decoration-none">
                    <div class="d-flex flex-column justify-content-between py-2">
                            <div class="d-flex flex-row justify-content-start align-items-center">
                                <div class="containerPerfilComentario ratio ratio-1x1">
                                    <img src=" {{asset('images/perfil.png')}} " alt="Perfil" class="rounded-circle border border-1 border-dark">
                                </div>
                                <p class="my-0 ms-3 text-dark">Nome</p>
                            </div>
                        <div>
                            <p class="text-secondary">Mensagem</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <a href="{{route('conversas.conversa')}}" class="text-decoration-none">
                    <div class="d-flex flex-column justify-content-between py-2">
                            <div class="d-flex flex-row justify-content-start align-items-center">
                                <div class="containerPerfilComentario ratio ratio-1x1">
                                    <img src=" {{asset('images/perfil.png')}} " alt="Perfil" class="rounded-circle border border-1 border-dark">
                                </div>
                                <p class="my-0 ms-3 text-dark">Nome</p>
                            </div>
                        <div>
                            <p class="text-secondary">Mensagem</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <a href="{{route('conversas.conversa')}}" class="text-decoration-none">
                    <div class="d-flex flex-column justify-content-between py-2">
                            <div class="d-flex flex-row justify-content-start align-items-center">
                                <div class="containerPerfilComentario ratio ratio-1x1">
                                    <img src=" {{asset('images/perfil2.png')}} " alt="Perfil" class="rounded-circle border border-1 border-dark">
                                </div>
                                <p class="my-0 ms-3 text-dark">Nome</p>
                            </div>
                        <div>
                            <p class="text-secondary">Mensagem</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <a href="{{route('conversas.conversa')}}" class="text-decoration-none">
                    <div class="d-flex flex-column justify-content-between py-2">
                            <div class="d-flex flex-row justify-content-start align-items-center">
                                <div class="containerPerfilComentario ratio ratio-1x1">
                                    <img src=" {{asset('images/perfil.png')}} " alt="Perfil" class="rounded-circle border border-1 border-dark">
                                </div>
                                <p class="my-0 ms-3 text-dark">Nome</p>
                            </div>
                        <div>
                            <p class="text-secondary">Mensagem</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        
        <div class="row">
            <div class="col">
                <a href="{{route('conversas.conversa')}}" class="text-decoration-none">
                    <div class="d-flex flex-column justify-content-between py-2">
                            <div class="d-flex flex-row justify-content-start align-items-center">
                                <div class="containerPerfilComentario ratio ratio-1x1">
                                    <img src=" {{asset('images/perfil.png')}} " alt="Perfil" class="rounded-circle border border-1 border-dark">
                                </div>
                                <p class="my-0 ms-3 text-dark">Nome</p>
                            </div>
                        <div>
                            <p class="text-secondary">Mensagem</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

@endsection