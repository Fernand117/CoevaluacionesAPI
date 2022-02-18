<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tipos;
use DB;

class TiposController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = tipos::where('estado','=',1)->get();
        $tipo = [];
        foreach($data as $key => $value){
           $categorias[$key] = [
                'id'=>$value['id'],
                'tipos_usuarios'=>$value['tipos_usuarios'],
                'estado'=>$value['estado'],
            ];
        }
        return response()->json($tipo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datos = $request->all();
        DB::beginTransaction();
        try {
            
            $tipo = new tipos();
            $tipo->tipos_usuarios =  $datos['tipos_usuarios'];
            $tipo->estado=1;
            $tipo->save();

            DB::commit();
            return response()->json(array('success' => true));
        }catch (Exception $e) {
            DB::rollBack();
            return response()->json(array('success' => false));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $otraVar = tipos::find($id);
        
        $masvar = [
            'id'=>$otraVar['id'],
            'tipos_usuarios'=>$otraVar['tipos_usuarios'],
        ];
        return response()->json($masvar);        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datos = $request->all();
        DB::beginTransaction();
        try {
            $tipo = tipos::find($id);
            $tipo->tipos_usuarios =  $datos['tipos_usuarios'];
            $tipo->update();

            DB::commit();
            return response()->json(array('success' => true));
        }catch (Exception $e) {
            DB::rollBack();
            return response()->json(array('success' => false));
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $tipo = tipos::find($id);
        $tipo->estado=0;
        $tipo->update();
        return response()->json(array('success' => true));
    }
}
