<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Tabeliao;
use Illuminate\Http\Request;

class TabeliaoControllerApi extends BaseController
{
    public function __construct()
    {
        $this->classe = Tabeliao::class;
    }
}
