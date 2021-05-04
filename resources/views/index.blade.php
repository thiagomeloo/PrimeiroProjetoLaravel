<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/style.css')}}">

    <title>Mini Posts</title>
</head>

<body class="container-fluid">
    <div class="col-10 mx-auto mt-5 mb-5">
        <div class="col">
            <h2>Mini Post</h2>
            <p class="lead">
                Melhor app para armazenar seus posts diarios.
            </p>
        </div>
        <form action="{{route('post.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-3 form-floating">
                    <input type="text" class="form-control" name="title" id="formTitulo" placeholder="Titulo">
                    <label for="formTitulo">Titulo</label>
                </div>
                <div class="col-7 form-floating">
                    <textarea class="form-control" id="formConteudo" name="content" cols="30" rows="10"></textarea>
                    <label for="formConteudo">Conteudo</label>
                </div>
                <div class="col-2">
                    <input type="submit" class="btn btn-primary btn-lg" class="form-control" value="Adicionar Post">
                </div>
            </div>
        </form>
    </div>

    <div class="col-10 mx-auto">
        <ul class="list-group">
            @foreach ($posts as $post)
            <li class="list-group-item">
                <h5 class="mb-1">{{$post->title}}</h5>
                <p class="mb-1">{{$post->content}}</p>
            </li>
            @endforeach
        </ul>
    </div>


    <script src="{{ asset('js/jquery.js')}}"> </script>
</body>

</html>
