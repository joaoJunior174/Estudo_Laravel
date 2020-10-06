<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit tabeliao</title>
</head>

<body>

    <form action="{{route('editarcon',$contrato->id)}}" method="post">
        {{ csrf_field() }}
        <label >Tipo_contrato</label>
        <input type="text" placeholder="" value='{{$contrato->tipo_contrato}}' name="tipo_contrato"><br>
        <label >Envolvido1</label>
        <input type="text" placeholder="" value='{{$contrato->envolvido1}}' name="envolvido1"><br>
        <label >Envolvido2</label>
        <input type="text" placeholder="" value='{{$contrato->envolvido2}}' name="envolvido2"><br>
        <label >Data Contrato</label>
        <input type="date" placeholder="" value='{{$contrato->data_contrato}}' name="data_contrato"><br>
        <label >Valor</label>
        <input type="text" placeholder="" value='{{$contrato->valor}}' name="valor"><br>
        
        <select name="nome_tabeliao" >
            @foreach($tabeliao as $tab)
            <option>{{$tab->nome}}</option>
            @endforeach
        </select>
            

        <input type="submit" value="Salvar">

    </form>

</body>

</html>