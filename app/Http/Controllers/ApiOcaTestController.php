<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Oca;

class ApiOcaTestController extends Controller
{



    function index():string
    {

        $oca 	= new Oca($cuit = '20-27861007-2', $operativa = 12345);
        $price 	= $oca->tarifarEnvioCorporativo(1, 1, 1640, 1006, 1, 0);
        $envios = $oca->listEnvios($fechaDesde = '08-08-2015', $fechaHasta = '13-08-2015');

        // otra prueba

        $test_oca = new Oca('20-27861007-2');


        dd($test_oca->getCuit());

        dd($price);
        dd($envios);

        return 'true';
    }
}
