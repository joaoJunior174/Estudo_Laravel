<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contrato;

class ContratoControllerApi extends BaseController
{
    public function __construct()
    {
        $this->classe = Contrato::class;
    }
}
