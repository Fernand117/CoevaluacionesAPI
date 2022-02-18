<?php

namespace App\Http\Controllers;

use App\Models\GradosModel;
use Illuminate\Http\Request;

class GradosController extends Controller
{
    public function listarGrados()
    {
        $grados = GradosModel::all();
        return response()->json(['Status' => 200, 'Mensaje' => 'Lista de grados actuales', 'Datos' => $grados], 200);
    }

    public function crearGrado(Request $request)
    {
        $datos = $request->all();
        $grado = new GradosModel();

        $grado->grado = $datos['grado'];
        $grado->estado = '1';
        $grado->save();

        return response()->json(['Status' => 200, 'Mensaje' => 'Grado generado correctamente']);
    }

    public function editarGrado(Request $request)
    {
        $datos = $request->all();
        $grado = GradosModel::find($datos['idGrado']);

        $grado->grado = $datos['grado'];
        $grado->update();

        return response()->json(['Status' => 200, 'Mensaje' => 'Grado actualizado correctamente']);
    }

    public function eliminarGrado(Request $request)
    {
        $datos = $request->all();
        $grado = GradosModel::find($datos['idGrado']);
        $grado->estado = '0';
        $grado->update();

        return response()->json(['Status' => 200, 'Mensaje' => 'Grado eliminado correctamente']);
    }
}
