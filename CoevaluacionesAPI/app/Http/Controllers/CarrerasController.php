<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class CarrerasController extends Controller
{
 //
    public function listarCarreras()
    {
        $grados = CarrerasModel::all();
        return response()->json(['Status' => 200, 'Mensaje' => 'Lista de carreras', 'Datos' => $Carreras], 200);
    }

    public function crearGrupo(Request $request)
    {
        $datos = $request->all();
        $grado = new CarrerasModel();

        $grado->grado = $datos['carerras'];
        $grado->estado = '1';
        $grado->save();

        return response()->json(['Status' => 200, 'Mensaje' => 'Carrera generado correctamente']);
    }

    public function editarCarrera(Request $request)
    {
        $datos = $request->all();
        $grado = CarreraModel::find($datos['idCarrera']);

        $grado->grado = $datos['carrera'];
        $grado->update();

        return response()->json(['Status' => 200, 'Mensaje' => 'actualizado correctamente']);
    }

    public function eliminarCarrera(Request $request)
    {
        $datos = $request->all();
        $grado = CarreraModel::find($datos['idCarrera']);
        $grado->estado = '0';
        $grado->update();

        return response()->json(['Status' => 200, 'Mensaje' => 'eliminado correctamente']);

    }
}
