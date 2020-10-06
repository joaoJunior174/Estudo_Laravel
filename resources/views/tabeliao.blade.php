@extends('template.template')
@section('titulo','tabeliao')

@section('conteudo')


<a href="/addtabeliao" class="btn btn-success">Adicionar</a>

<table style="width:100%;border:solid 1px black;border-collapse: collapse;">
    <tr>
        <th style="border:solid 1px black;padding:2px;">Nome</th>
        <th style="border:solid 1px black;padding:2px;width:10%">Opção 1</th>
        <th style="border:solid 1px black;padding:2px;width:10%">Opção 2</th>


    </tr>

    @foreach($tabeliao as $tab)
    <tr>
        
        <td style="border:solid 1px black;padding:2px;">{{$tab->nome}}</td>
        <td style="border:solid 1px black;padding:2px;"><a style="width: 100%;" href="{{ route('editartab', $tab->id) }}" class="btn btn-success">Atualizar</a></td>
        <td style="border:solid 1px black;padding:2px;"><a style="width: 100%;" href="{{ route('excluirtab', $tab->id) }}" class="btn btn-success">Deletar</a></td>
    </tr>
    @endforeach

</table>


@endsection