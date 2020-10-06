@extends('template.template')
@section('titulo','contrato')

@section('conteudo')


<a href="/addcontrato" class="btn btn-success">Adicionar</a>

<table style="width:100%;border:solid 1px black;border-collapse: collapse;">
    <tr>
        <th style="border:solid 1px black;padding:2px;">tipo contrato</th>
        <th style="border:solid 1px black;padding:2px;">envolvido1</th>
        <th style="border:solid 1px black;padding:2px;">envolvido2</th>
        <th style="border:solid 1px black;padding:2px;">data_contrato</th>
        <th style="border:solid 1px black;padding:2px;">valor</th>
        <th style="border:solid 1px black;padding:2px;">nome_tabeliao</th>
        <th style="border:solid 1px black;padding:2px;">Opção 1</th>
        <th style="border:solid 1px black;padding:2px;">Opção 2</th>


    </tr>

    @foreach($contrato as $con)
    <tr>
        
        <td style="border:solid 1px black;padding:2px;">{{$con->tipo_contrato}}</td>
        <td style="border:solid 1px black;padding:2px;">{{$con->envolvido1}}</td>
        <td style="border:solid 1px black;padding:2px;">{{$con->envolvido2}}</td>
        <td style="border:solid 1px black;padding:2px;">{{$con->data_contrato}}</td>
        <td style="border:solid 1px black;padding:2px;">{{$con->valor}}</td>
        <td style="border:solid 1px black;padding:2px;">{{$con->nome_tabeliao}}</td>
        <td style="border:solid 1px black;padding:2px;"><a style="width: 100%;" href="{{ route('editarcon', $con->id) }}" class="btn btn-success">Atualizar</a></td>
        <td style="border:solid 1px black;padding:2px;"><a style="width: 100%;" href="{{ route('excluircon', $con->id) }}" class="btn btn-success">Deletar</a></td>
    </tr>
    @endforeach

</table>


@endsection