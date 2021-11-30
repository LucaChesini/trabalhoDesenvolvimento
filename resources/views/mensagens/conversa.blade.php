@extends('templates.base')
@section('titulo', 'Post')

@section('corpo')

    <div class="row">
        <div class="bg-light">
            <p class="p-2">NOME</p>
        </div>
    </div>

    <div class="overflow-auto">
        <div class="row justify-content-start my-3">
            <div class="col-6 bg-secondary rounded-3 py-2 px-4">
                <p class="text-white">Mensagem Usuário 2</p>
            </div>
        </div>

        <div class="row justify-content-end my-3">
            <div class="col-6 bg-light rounded-3 py-2 px-4">
                <p>Mensagem Usuário 1</p>
            </div>
        </div>

        <div class="row justify-content-start my-3">
            <div class="col-6 bg-secondary rounded-3 py-2 px-4">
                <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus reprehenderit nulla dolores atque modi rem voluptas sint animi molestiae quas exercitationem natus consectetur maiores, repellendus dicta repellat laborum minus. Obcaecati!</p>
            </div>
        </div>
    </div>

@endsection