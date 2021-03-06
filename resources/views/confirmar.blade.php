@extends('templates.base')
@section('titulo', 'Confirmação')

@section('corpo')

    <div class="row">
        <div class="col">
            <div class="alert alert-danger mt-2">Você tem certeza que deseja excluir ...</div>
            <form action="#" method="POST">
                <button type="submit" class="btn btn-danger me-2">Sim</button>
                <a href="#" class="btn btn-info">Não</a>
            </form>
        </div>
    </div>

@endsection