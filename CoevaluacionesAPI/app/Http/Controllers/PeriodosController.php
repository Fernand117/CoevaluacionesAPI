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
<<<<<<< HEAD
        $periodo = new PeridosModel();
=======
        $periodos = new PeriodosModel();

        $periodos->periodos = $datos['peridos'];
        $periodos->estado = '1';
        $periodos->save();
>>>>>>> 04ed17fda5c87cb58f19b7b83e441ba39feb5580

        $periodo->periodo = $datos['peridos'];
        $periodo->estado = '1';
        $periodo->save();
        
        return response()->json(['Status' => 200, 'Mensaje' => 'Periodo Generado ']);
    }
    public function editarPeriodos(Request $request)
    {
        $datos = $request->all();
        $periodo = PeriodosModel::find($datos['idPeriodo']);

<<<<<<< HEAD
        $periodo->periodo = $datos['periodo'];
        $periodo->update();
=======
        $periodos->periodo = $datos['periodo'];
        $periodos->update();
>>>>>>> 04ed17fda5c87cb58f19b7b83e441ba39feb5580

        return response()->json(['Status' => 200, 'Mensaje' => 'Periodo actualizado ']);
    }
    public function eliminarPeriodos(Request $request)
    {
        $datos = $request->all();
<<<<<<< HEAD
        $periodo = PeriodosModel::find($datos['idGrado']);
        $periodo->estado = '0';
        $periodo->update();
=======
        $periodos = PeriodosModel::find($datos['idGrado']);
        $periodos->estado = '0';
        $periodos->update();
>>>>>>> 04ed17fda5c87cb58f19b7b83e441ba39feb5580

        return response()->json(['Status' => 200, 'Mensaje' => 'Periodo eliminado']);
    }
}
