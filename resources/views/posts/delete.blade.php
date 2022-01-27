@extends('templates.base')
@section('titulo', 'Deletar Post')

@section('corpo')

    <div class="row">
        <div class="col">
            <div class="alert alert-danger mt-2">Você tem certeza que deseja excluir esse post?</div>
            <form action="{{route('posts.remove', $post)}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger me-2">Sim</button>
                <a href="{{route('index')}}" class="btn btn-info">Não</a>
            </form>
        </div>
    </div>

@endsection