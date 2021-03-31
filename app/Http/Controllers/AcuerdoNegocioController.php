<?php

namespace App\Http\Controllers;

use App\AcuerdoNegocio;
use App\Facturacion;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AcuerdoNegocioController extends Controller
{
    public function save(Request $request){

        $validate = $this->validate($request , array(
            'idUser' => 'required',
            'name' => 'required|unique:acuerdos_de_negocio',
            'metodo' => 'required',
            'desde' => 'required',
            'hasta' => 'required',
            'cant_min' => 'required',
            'cant_max' => 'required'
        ));

        $acuerdo = new AcuerdoNegocio();

        $acuerdo->userId = $request->idUser;
        $acuerdo->name = $request->name;
        $acuerdo->publicaciones_min = $request->cant_min;
        $acuerdo->publicaciones_max = $request->cant_max;
$acuerdo->save();
        $facturacion = new Facturacion();
        $facturacion->metodo = $request->metodo;
        $facturacion->desde = null; //Carbon::createFromFormat( 'd m Y', $request->desde);
        $facturacion->hasta = null; //Carbon::createFromFormat( 'd m Y', $request->hasta);
        $facturacion->acuerdoId = $acuerdo->id;


        $facturacion->save();

        return redirect('/');
    }
}
