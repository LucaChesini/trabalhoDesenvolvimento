<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <title>Login</title>
    </head>
    <body>
        <div class="containerForm h-100 d-flex justify-content-center align-items-center">
            <div class="form border border-2 py-4 px-sm-4 px-1 rounded-3">
                <h1 class="mb-3">Fazer Login</h1>
                <form action="#" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha:</label>
                        <input type="password" name="password" id="password" class="form-control">
                        <a href="#" class="form-text">Recuperar Senha</a>
                    </div>
                    <div class="d-flex flex-row justify-content-around flex-wrap">
                        <button type="submit" class="btn btn-success mx-auto">Enviar</button>
                        <a href="{{route('index')}}" role="button" class="btn btn-danger mx-auto">Voltar</a>
                    </div>
                </form>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>