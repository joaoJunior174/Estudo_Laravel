<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

abstract class BaseController extends Controller
{
    protected $classe;
   
    public function buscar($id){

        $dados = $this->classe::find($id);

        if(is_null($dados)){
            return response()->json('Usuário não encontrado',404);
        }
            return response()->json($dados,200);
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();

        $item = $this->classe::find($id);

        if (is_null($item)) {
            return response()->json(['erro' => 'Dado não encontrado'], 404);
        }

        return response()->json($item->update($dados), 200);

    }

    public function salvar(Request $req)
    {
        $dados = $req->all();

        return response()->json($this->classe::create($dados), 201);
    }
    public function deletar($id){

        $dado = $this->classe::find($id);

        if (is_null($dado)) {
            return response()->json(['erro' => 'Dado não encontrado'], 404);
        }

        $dado->delete();

        return response()->json('Dado Removido', 200);
    }
}