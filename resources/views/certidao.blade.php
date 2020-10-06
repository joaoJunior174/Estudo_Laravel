@extends('template.template')
@section('titulo','certidao')

@section('conteudo')


<a href="/addcertidao" class="btn btn-success">Adicionar</a>

<table style="width:100%;border:solid 1px black;border-collapse: collapse;">
    <tr>
        <th style="border:solid 1px black;padding:2px;">tipo certidao</th>
        <th style="border:solid 1px black;padding:2px;">envolvido1</th>
        <th style="border:solid 1px black;padding:2px;">envolvido2</th>
        <th style="border:solid 1px black;padding:2px;">data_certidao</th>
        <th style="border:solid 1px black;padding:2px;">nome_tabeliao</th>
        <th style="border:solid 1px black;padding:2px;">Opção 1</th>
        <th style="border:solid 1px black;padding:2px;">Opção 2</th>


    </tr>

    @foreach($certidao as $cer)
    <tr>
        
        <td style="border:solid 1px black;padding:2px;">{{$cer->tipo_certidao}}</td>
        <td style="border:solid 1px black;padding:2px;">{{$cer->envolvido1}}</td>
        <td style="border:solid 1px black;padding:2px;">{{$cer->envolvido2}}</td>
        <td style="border:solid 1px black;padding:2px;">{{$cer->data_certidao}}</td>
        <td style="border:solid 1px black;padding:2px;">{{$cer->nome_tabeliao}}</td>
        <td style="border:solid 1px black;padding:2px;"><a style="width: 100%;" href="{{ route('editarcer', $cer->id) }}" class="btn btn-success">Atualizar</a></td>
        <td style="border:solid 1px black;padding:2px;"><a style="width: 100%;" href="{{ route('excluircer', $cer->id) }}" class="btn btn-success">Deletar</a></td>
    </tr>
    @endforeach

</table>


@endsection