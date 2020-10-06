<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add contrato</title>
</head>
<body>
    
    <form class="form" action="\salvarcon" method="post">
    {{ csrf_field() }}
        <label >Tipo_contrato</label>
        <input type="text" placeholder="" name="tipo_contrato"><br>
        <label >Envolvido1</label>
        <input type="text" placeholder="" name="envolvido1"><br>
        <label >Envolvido2</label>
        <input type="text" placeholder="" name="envolvido2"><br>
        <label >Data Contrato</label>
        <input type="date" placeholder="" name="data_contrato"><br>
        <label >Valor</label>
        <input type="text" placeholder="" name="valor"><br>
        
        <select name="nome_tabeliao" >
            
            @foreach($tabeliao as $tab)
        <option>{{$tab->nome}}</option>
            @endforeach
        </select>

        <input type="submit" value="Salvar">

        

    </form>

</body>
</html>