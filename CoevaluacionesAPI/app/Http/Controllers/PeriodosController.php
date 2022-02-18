<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PeriodosModel;


class PeriodosController extends Controller
{
   public function listarPeriodos()
   {
       $periodos = PeriodosModel::all();
       return response()->json(['status' => 200, 'Mensaje' => 'Listar periodos', 'Datos' =>$periodos], 200);
   }
   public function crearPeriodos(Request $request)
    {
        $datos = $request->all();
        $periodos = new PeriodosModel();

        $periodos->periodos = $datos['peridos'];
        $periodos->estado = '1';
        $periodos->save();

        return response()->json(['Status' => 200, 'Mensaje' => 'Periodo Generado ']);
    }
    public function editarPeriodos(Request $request)
    {
        $datos = $request->all();
        $periodos = PeriodosModel::find($datos['idPeriodo']);

        $periodos->periodo = $datos['periodo'];
        $periodos->update();

        return response()->json(['Status' => 200, 'Mensaje' => 'Periodo actualizado ']);
    }
    public function eliminarPeriodos(Request $request)
    {
        $datos = $request->all();
        $periodos = PeriodosModel::find($datos['idGrado']);
        $periodos->estado = '0';
        $periodos->update();

        return response()->json(['Status' => 200, 'Mensaje' => 'Periodo eliminado']);
    }
}
