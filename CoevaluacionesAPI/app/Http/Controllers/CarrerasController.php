<?php

namespace App\Http\Controllers;

<<<<<<< Updated upstream
=======
use App\Models\CarrerasModel;
>>>>>>> Stashed changes
use Illuminate\Http\Request;

class CarrerasController extends Controller
{
<<<<<<< Updated upstream
    //
=======
 //
    public function listarCarreras()
    {
        $carreras = CarrerasModel::all();
        return response()->json(['Status' => 200, 'Mensaje' => 'Lista de carreras', 'Datos' => $carreras], 200);
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
        $grado = CarrerasModel::find($datos['idCarrera']);

        $grado->grado = $datos['carrera'];
        $grado->update();

        return response()->json(['Status' => 200, 'Mensaje' => 'actualizado correctamente']);
    }

    public function eliminarCarrera(Request $request)
    {
        $datos = $request->all();
        $grado = CarrerasModel::find($datos['idCarrera']);
        $grado->estado = '0';
        $grado->update();

        return response()->json(['Status' => 200, 'Mensaje' => 'eliminado correctamente']);

    }
>>>>>>> Stashed changes
}
