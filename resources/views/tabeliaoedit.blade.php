<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit tabeliao</title>
</head>
<body>
    
    <form action="{{route('editartab',$tabeliao->id)}}" method="post">
    {{ csrf_field() }}
        <input type="text" value="{{$tabeliao->nome}}" placeholder="nome" name="nome">
        <input type="submit" value="Salvar">

    </form>

</body>
</html>