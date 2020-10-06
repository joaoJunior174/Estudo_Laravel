<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contrato;
use App\Tabeliao;

class ContratoController extends Controller
{

    public function index()
    {

        $contrato = Contrato::all();
        
        return view('contrato', compact('contrato'));
    }

    public function excluir($id)
    {
        Contrato::where('id', '=', $id)->delete();
        return redirect()->route('listaContrato');
    }
    public function salvar(Request $req)
    {

        $table = new Contrato;
        $table->tipo_contrato = $req['tipo_contrato'];
        $table->envolvido1 = $req['envolvido1'];
        $table->envolvido2 = $req['envolvido2'];
        $table->data_contrato = $req['data_contrato'];
        $table->valor = $req['valor'];
        $table->nome_tabeliao = $req['nome_tabeliao'];

        $table->save();
        return redirect()->route('listaContrato');
    }

    public function buscaEditar($id)
    {
        $contrato = Contrato::find($id);
        $tabeliao = Tabeliao::all();
        return view('contratoedit', compact('contrato','tabeliao'));
    }

    public function editar(Request $req, $id)
    {
        Contrato::find($id)->update($req->all());
        return redirect()->route('listaContrato');
    }
}
