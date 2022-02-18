<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampusController extends Controller
{
    
        public function index(){
            $data = campus::where('Estado','=',1)->get();
            $campus= [];
            foreach($data as $key => $value){
               $campus[$key] = [
                    'id'=>$value['id'],
                    'Nombre'=>$value['Nombre'],
                    'clave'=>$value['clave'],
                    'Estado'=>$value['Estado'],
                ];
               
             } 
             return response()->json($campus);
    
    
        }
        public function store(Request $request){
            $datos = $request->all();
            DB::beginTransaction();
            try {
                $campus = new Campus();
                $campus->Nombre =  $datos['Nombre'];
                $campus->Clave = $datos['Clave'];
                $campus->Estado = $datos['Estado'];
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
            $otraVar = Campus::find($id);
            
            $masvar = [
                'id'=>$otraVar['id'],
                'Nombre'=>$otraVar['Nombre'],
                'Clave'=>$otraVar['Clave'],
                'Estado'=>$otraVar['Estado'],
            ];
            return response()->json($masvar);        
        }
        public function update(Request $request, $id)
        {
            //
            $datos = $request->all();
            DB::beginTransaction();
            try {
                $campus = Campus::find($id);
                $campus->Nombre =  $datos['Nombre'];
                $campus->Clave =  $datos['Clave'];
                $campus->Estado =  $datos['Estado'];
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
            
            $campus = Campus::find($id);
            $campus->Estado=0;
            $campus->update();
            return response()->json(array('success' => true));
        }
    
}
