@extends('templates.base')
@section('titulo', 'Post')

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
            <button type="submit" id="curtir" name="curtir" class="btn"><i class="bi bi-hand-thumbs-up"></i><span>100</span></button>
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
        <div class="col-md-3 col-6">
            <div class="containerImgPrincipal ratio ratio-16x9">
                <img src=" {{asset('images/imagem.png')}} " alt="Imagem Postagem" class="h-100 w-100 postPrincipal">
            </div>
            <div class="textoPostPrincipal">
                <h1>Título</h1>
            </div>
        </div>
        <div class="col-md-2 d-md-block d-none"></div>
        <div class="col-md-3 col-6">
            <div class="containerImgPrincipal ratio ratio-16x9">
                <img src=" {{asset('images/teste.png')}} " alt="Imagem Postagem" class="h-100 w-100 postPrincipal">
            </div>
            <div class="textoPostPrincipal">
                <h1>Título</h1>
            </div>
        </div>
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
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col">
            <h2>Deixar comentário:</h2>
            <form action="#" method="POST">
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

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col">
            <h2>Comentários:</h2>
        </div>
        <div class="col-md-1"></div>
    </div>

    {{-- LISTAGEM DE COMENTÁRIOS --}}
    <div class="intercalar my-3">
        <div class="row">
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
        </div>

        <div class="row">
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
        </div>

        <div class="row">
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
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column justify-content-start p-2">
                    <div class="d-flex flex-row justify-content-start align-items-center border-bottom pb-1">
                        <div class="containerPerfilComentario ratio ratio-1x1">
                            <img src=" {{asset('images/perfil2.png')}} " alt="Perfil" class="rounded-circle border border-1 border-dark">
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
        </div>
        
        <div class="row">
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
        </div>
    </div>

@endsection