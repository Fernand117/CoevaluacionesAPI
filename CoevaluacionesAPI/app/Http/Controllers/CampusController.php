<?php

namespace App\Http\Controllers;

use App\Models\CampusModel;
use Exception;
use Illuminate\Http\Request;
<<<<<<< Updated upstream
use TheSeer\Tokenizer\Exception;
use Illuminate\Support\Facades\App;
use App\Models\CampusModel;
=======
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
                $campus->Nombre =  $datos['Nombre'];
                $campus->Clave = $datos['Clave'];
                $campus->Estado = $datos['Estado'];
=======
                $campus->nombre =  $datos['Nombre'];
                $campus->clave = $datos['Clave'];
                $campus->estado = $datos['Estado'];
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
            
=======

>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
                $campus->Nombre =  $datos['Nombre'];
                $campus->Clave =  $datos['Clave'];
                $campus->Estado =  $datos['Estado'];
=======
                $campus->nombre =  $datos['Nombre'];
                $campus->clave =  $datos['Clave'];
                $campus->estado =  $datos['Estado'];
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
            
            $campus = CampusModel::find($id);
            $campus->Estado=0;
=======

            $campus = CampusModel::find($id);
            $campus->estado='0';
>>>>>>> Stashed changes
            $campus->update();
            return response()->json(array('success' => true));
        }

}
