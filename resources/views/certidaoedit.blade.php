<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit cetidao</title>
</head>

<body>

    <form action="{{route('editarcer',$certidao->id)}}" method="post">
        {{ csrf_field() }}
        <label >Tipo_certidao</label>
        <input type="text" placeholder="" value='{{$certidao->tipo_certidao}}' name="tipo_certidao"><br>
        <label >Envolvido1</label>
        <input type="text" placeholder="" value='{{$certidao->envolvido1}}' name="envolvido1"><br>
        <label >Envolvido2</label>
        <input type="text" placeholder="" value='{{$certidao->envolvido2}}' name="envolvido2"><br>
        <label >Data Certidao</label>
        <input type="date" placeholder="" value='{{$certidao->data_certidao}}' name="data_certidao"><br>
        
        <select name="nome_tabeliao" >
            @foreach($tabeliao as $tab)
            <option>{{$tab->nome}}</option>
            @endforeach
        </select>
            

        <input type="submit" value="Salvar">

    </form>

</body>

</html>