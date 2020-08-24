<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ControladorTest extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getControladorTest(){
        return 'controladorFunciona';
    }

    public function getToken(){
        return csrf_token(); 
    }


    public function getDataFromDb(){

        $nombres = DB::table('notas')->get();
        return $nombres;
    }

    public function inDataInToDataBase(Request $request){

        DB::table('notas')->insert(
            ['nombre' => '| Nombre: '.$request->input('nombre')]
        );

        return 'Datos Insertados: '.$request->input('nombre');
    }

    public function delDataInToDataBase(Request $request){

        DB::table('notas')->where('id',$request->input('id'))->delete();

        return 'Datos Borrados!';
    }

    public function updateDataBase(Request $request){

        DB::table('notas')->where('id',$request->input('id'))->update(
            ['nombre' => 'Nombre actualizado: '.$request->input('nombre')]
        );

        return 'Datos Actualizados!';
    }


}
