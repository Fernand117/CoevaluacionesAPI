<?php

namespace App\Http\Controllers;

use App\Models\CarrerasModel;
use Illuminate\Http\Request;

class CarrerasController extends Controller
{
    public function listarCarreras()
    {
        $carreras = CarrerasModel::all();
        return response()->json(['Status' => 200, 'Mensaje' => 'Lista de carreras', 'Datos' => $carreras], 200);
    }

    public function crearGrupo(Request $request)
    {
        $datos = $request->all();
        $carreras = new CarrerasModel();

        $carreras->nombre = $datos['nombre'];
        $carreras->clave= $datos['clave'];
        $carreras->estado = '1';
        $carreras->save();

        return response()->json(['Status' => 200, 'Mensaje' => 'generado correctamente']);
    }

    public function editarCarrera(Request $request)
    {
        $datos = $request->all();
        $carreras = CarrerasModel::find($datos['idCarrera']);

        $carreras->nombre = $datos['nombre'];
        $carreras->clave = $datos['clave'];
        $carreras->estado = '1';
        $carreras->update();

        return response()->json(['Status' => 200, 'Mensaje' => 'actualizado correctamente']);
    }

    public function eliminarCarrera(Request $request)
    {
        $datos = $request->all();
        $carreras = CarrerasModel::find($datos['idCarrera']);
        $carreras->nombre= 'nombre';
        $carreras->clave= 'clave';
        $carreras->estado = '0';
        $carreras->update();

        return response()->json(['Status' => 200, 'Mensaje' => 'eliminado correctamente']);

    }
}
