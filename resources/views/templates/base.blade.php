<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
                selector: '.tinymce'
            });
        </script>

        <title>@yield('titulo')</title>
    </head>
    <body>
        <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-warning bg-opacity-50">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('index')}}">A Taverna</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#itensNavbar" aria-controls="itensNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="itensNavbar">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('posts')}}">Posts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('listaContas')}}">Lista</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-info" href="{{route('inserir.posts')}}">Criar Post</a>
                        </li>
                    </ul>
                    <div class="d-flex flex-md-row flex-column align-items-md-center align-items-start gap-2">
                        <a class="text-secondary text-decoration-none" href="{{route('conversas.lista')}}">Conversas</a>
                        <a class="text-secondary text-decoration-none" href="{{route('perfil')}}">Perfil</a>
                        <div>Nome</div>
                        <div class="containerPerfilNavbar ratio ratio-1x1">
                            <img src=" {{asset('images/perfil.png')}} " alt="Perfil" class="rounded-circle border border-1 border-dark">
                        </div>
                    </div>
                    <div>
                        <a role="button" href=" {{route('cadastro')}} " class="btn btn-primary">Cadastrar</a>
                        <a role="button" href=" {{route('login')}} " class="btn btn-success">Fazer Login</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container">
            @yield('corpo')
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>