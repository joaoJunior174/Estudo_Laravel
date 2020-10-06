<?php

namespace App\Http\Controllers;

use App\Tabeliao;
use Illuminate\Http\Request;

class TabeliaoController extends Controller
{
    
    public function index(){

        $tabeliao = Tabeliao::all();

        return view('tabeliao',compact('tabeliao'));

    }

    public function excluir($id)
    {
        Tabeliao::where('id','=',$id)->delete();
        return redirect()->route('listaTabeliao');
    }
    public function salvar(Request $req)
    {
       
        $tab = new Tabeliao;
        $tab->nome = $req['nometabeliao'];
        $tab->save();
        return redirect()->route('listaTabeliao');
    }

    public function buscaEditar($id)
    {
        $tabeliao = Tabeliao::find($id);
        return view('tabeliaoedit',compact('tabeliao'));

    }

    public function editar(Request $req, $id)
    {
        Tabeliao::find($id)->update($req->all());
        return redirect()->route('listaTabeliao');
    }
}
