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
        $periodo = new PeriodosModel();

        $periodo->periodo = $datos['peridos'];
        $periodo->estado = '1';
        $periodo->save();

        return response()->json(['Status' => 200, 'Mensaje' => 'Periodo Generado ']);
    }
    public function editarPeriodos(Request $request)
    {
        $datos = $request->all();
        $periodo = PeriodosModel::find($datos['idPeriodo']);

        $periodo->periodo = $datos['periodo'];
        $periodo->update();

        return response()->json(['Status' => 200, 'Mensaje' => 'Periodo actualizado ']);
    }
    public function eliminarPeriodos(Request $request)
    {
        $datos = $request->all();
        $periodo = PeriodosModel::find($datos['idGrado']);
        $periodo->estado = '0';
        $periodo->update();

        return response()->json(['Status' => 200, 'Mensaje' => 'Periodo eliminado']);
    }
}
