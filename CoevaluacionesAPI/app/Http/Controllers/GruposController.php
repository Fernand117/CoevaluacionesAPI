<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GruposController extends Controller
{
    public function listarGrupos()
    {
        $grupos = GruposModel::all();
        return response()->json(['Status' => 200, 'Mensaje' => 'Lista de grupos', 'Datos' => $grupos], 200);
    }

    public function crearGrupo(Request $request)
    {
        $datos = $request->all();
        $grupo = new GradosModel();

        $grupo->grupo = $datos['grupo'];
        $grupo->estado = '1';
        $grupo->save();

        return response()->json(['Status' => 200, 'Mensaje' => 'Grupo generado con extio']);
    }

    public function editarGrupo(Request $request)
    {
        $datos = $request->all();
        $grupo = GruposModel::find($datos['idGrupo']);

        $grupo->grupo = $datos['grupo'];
        $grupo->update();

        return response()->json(['Status' => 200, 'Mensaje' => 'Grado actualizado con exito']);
    }

    public function eliminarGrupo(Request $request)
    {
        $datos = $request->all();
        $grupo = GruposModel::find($datos['idGrupo']);
        $grupo->estado = '0';
        $grupo->update();

        return response()->json(['Status' => 200, 'Mensaje' => 'Grupo eliminado']);
    }
}
