@extends('templates.base')
@section('titulo', 'Post')

@section('corpo')

    <div class="row">
        <h1>Todas as contas:</h1>
    </div>

    <div class="row">
        <hr class="my-1">
    </div>

    <div class="intercalar">
        <div class="row">
            <div class="d-flex flex-row justify-content-between py-2">
                <div class="d-flex flex-row justify-content-start align-items-center">
                    <div class="containerPerfilComentario ratio ratio-1x1">
                        <img src=" {{asset('images/perfil.png')}} " alt="Perfil" class="rounded-circle border border-1 border-dark">
                    </div>
                    <div class="my-0 ms-3">Nome</div>
                </div>
                <div class="d-flex flex-row justify-content-start align-items-center">
                    <a role="button" href="#" class="btn btn-danger">Apagar</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="d-flex flex-row justify-content-between py-2">
                <div class="d-flex flex-row justify-content-start align-items-center">
                    <div class="containerPerfilComentario ratio ratio-1x1">
                        <img src=" {{asset('images/perfil.png')}} " alt="Perfil" class="rounded-circle border border-1 border-dark">
                    </div>
                    <div class="my-0 ms-3">Nome</div>
                </div>
                <div class="d-flex flex-row justify-content-start align-items-center">
                    <a role="button" href="#" class="btn btn-danger">Apagar</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="d-flex flex-row justify-content-between py-2">
                <div class="d-flex flex-row justify-content-start align-items-center">
                    <div class="containerPerfilComentario ratio ratio-1x1">
                        <img src=" {{asset('images/perfil.png')}} " alt="Perfil" class="rounded-circle border border-1 border-dark">
                    </div>
                    <div class="my-0 ms-3">Nome</div>
                </div>
                <div class="d-flex flex-row justify-content-start align-items-center">
                    <a role="button" href="#" class="btn btn-danger">Apagar</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="d-flex flex-row justify-content-between py-2">
                <div class="d-flex flex-row justify-content-start align-items-center">
                    <div class="containerPerfilComentario ratio ratio-1x1">
                        <img src=" {{asset('images/perfil.png')}} " alt="Perfil" class="rounded-circle border border-1 border-dark">
                    </div>
                    <div class="my-0 ms-3">Nome</div>
                </div>
                <div class="d-flex flex-row justify-content-start align-items-center">
                    <a role="button" href="#" class="btn btn-danger">Apagar</a>
                </div>
            </div>
        </div>
    </div>

@endsection