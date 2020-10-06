<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Certidao;
use App\Tabeliao;


class CertidaoController extends Controller
{
    public function index()
    {

        $certidao = Certidao::all();
        
        return view('certidao', compact('certidao'));
    }

    public function excluir($id)
    {
        Certidao::where('id', '=', $id)->delete();
        return redirect()->route('listaCertidao');
    }
    public function salvar(Request $req)
    {

        $table = new Certidao;
        $table->tipo_certidao = $req['tipo_certidao'];
        $table->envolvido1 = $req['envolvido1'];
        $table->envolvido2 = $req['envolvido2'];
        $table->data_certidao = $req['data_certidao'];
        $table->nome_tabeliao = $req['nome_tabeliao'];

        $table->save();
        return redirect()->route('listaCertidao');
    }

    public function buscaEditar($id)
    {
        $certidao = Certidao::find($id);
        $tabeliao = Tabeliao::all();
        return view('certidaoedit', compact('certidao','tabeliao'));
    }

    public function editar(Request $req, $id)
    {
        Certidao::find($id)->update($req->all());
        return redirect()->route('listaCertidao');
    }
}
