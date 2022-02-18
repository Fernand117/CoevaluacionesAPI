<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\CampusModel;
use Illuminate\Support\Facades\DB;

class CampusController extends Controller
{

        public function index(){
            $data = CampusModel::where('Estado','=',1)->get();
            $campus= [];
            foreach($data as $key => $value){
               $campus[$key] = [
                    'id'=>$value['id'],
                    'nombre'=>$value['Nombre'],
                    'clave'=>$value['clave'],
                    'estado'=>$value['Estado'],
                ];

             }
             return response()->json($campus);


        }
        public function store(Request $request){
            $datos = $request->all();
            DB::beginTransaction();
            try {
                $campus = new CampusModel();
                $campus->nombre =  $datos['Nombre'];
                $campus->clave = $datos['Clave'];
                $campus->estado = $datos['Estado'];
                $campus->save();

                DB::commit();
                return response()->json(array('success' => true));
            }catch (Exception $e) {
                DB::rollBack();
                return response()->json(array('success' => false));
            }
        }
        public function edit($id)
        {
            //
            $otraVar = CampusModel::find($id);

            $masvar = [
                'id'=>$otraVar['id'],
                'nombre'=>$otraVar['Nombre'],
                'clave'=>$otraVar['Clave'],
                'estado'=>$otraVar['Estado'],
            ];
            return response()->json($masvar);
        }
        public function update(Request $request, $id)
        {
            //
            $datos = $request->all();
            DB::beginTransaction();
            try {
                $campus = CampusModel::find($id);
                $campus->nombre =  $datos['Nombre'];
                $campus->clave =  $datos['Clave'];
                $campus->estado =  $datos['Estado'];
                $campus->update();

                DB::commit();
                return response()->json(array('success' => true));
            }catch (Exception $e) {
                DB::rollBack();
                return response()->json(array('success' => false));
            }


    }
    public function destroy($id)
        {

            $campus = CampusModel::find($id);
            $campus->estado=0;
            $campus->update();
            return response()->json(array('success' => true));
        }

}
