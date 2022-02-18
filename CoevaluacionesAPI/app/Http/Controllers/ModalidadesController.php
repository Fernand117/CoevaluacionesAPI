<?php

namespace App\Http\Controllers;

use App\Models\ModalidadesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\ObjectEnumerator\Exception;


class ModalidadesController extends Controller
{
    //
    

         public function index(){
        $data = ModalidadesModel::where('Estado','=',1)->get();
        $Modalidades= [];
        foreach($data as $key => $value){
           $Modalidades[$key] = [
                'id'=>$value['id'],
                'Modalidad'=>$value['Modalidad'],
                'clave'=>$value['clave'],
                'Estatdo'=>$value['Estado'],
            ];
           
         } 
         return response()->json($Modalidades);


    }
    public function store(Request $request){
        $datos = $request->all();
        DB::beginTransaction();
        try {
            $Modalidades = new ModalidadesModel();
            $Modalidades->Modalidad =  $datos['Modalidad'];
            $Modalidades->Clave = $datos['Clave'];
            $Modalidades->Estado = $datos['Estado'];
            $Modalidades->save();

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
        $otraVar = ModalidadesModel::find($id);
        
        $masvar = [
            'id'=>$otraVar['id'],
            'Modalidad'=>$otraVar['Modalidad'],
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
            $Modalidades = ModalidadesModel::find($id);
            $Modalidades->Modalidad =  $datos['Modalidad'];
            $Modalidades->Clave =  $datos['Clave'];
            $Modalidades->Estado =  $datos['Estado'];
            $Modalidades->update();

            DB::commit();
            return response()->json(array('success' => true));
        }catch (Exception $e) {
            DB::rollBack();
            return response()->json(array('success' => false));
        }
        

}
public function destroy($id)
    {
        
        $Modalidades = ModalidadesModel::find($id);
        $Modalidades->estatus=0;
        $Modalidades->update();
        return response()->json(array('success' => true));
    }

}