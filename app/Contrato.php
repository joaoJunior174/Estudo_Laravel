<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    //
    protected $table="contrato";
    protected $fillable=['tipo_contrato','envolvido1','envolvido2','data_contrato','valor','nome_tabeliao'];
   
}
