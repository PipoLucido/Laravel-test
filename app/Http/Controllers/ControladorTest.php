<?php

namespace App\Http\Controllers;

use App\cartuchera;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ControladorTest extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //testeando las rutas con controladores
    public function getControladorTest(){
        return 'controladorFunciona';
    }

    //obtener token de serguridad
    public function getToken(){
        return csrf_token(); 
    }


    //obtener de base de datos una tabla
    public function getDataFromDb(){

        $nombres = DB::table('notas')->get();
        return $nombres;
    }

    //insertar en base de datos
    public function inDataInToDataBase(Request $request){

        DB::table('notas')->insert(
            ['nombre' => '| Nombre: '.$request->input('nombre')]
        );

        return 'Datos Insertados: '.$request->input('nombre');
    }

    //eliminar de base de datos
    public function delDataInToDataBase(Request $request){

        DB::table('notas')->where('id',$request->input('id'))->delete();

        return 'Datos Borrados!';
    }

    //actualizar base de datos
    public function updateDataBase(Request $request){

        DB::table('notas')->where('id',$request->input('id'))->update(
            ['nombre' => 'Nombre actualizado: '.$request->input('nombre')]
        );

        return 'Datos Actualizados!';
    }



    //Consulta a modelo entidad relacion en base de datos

    
    

    public function entidadYrelacion(){

       $Cartu = cartuchera::all();
        $carucheraNombre;
        $cartucheraLapiz;
    
        foreach($Cartu as $cartuchera){
          echo  $carucheraNombre = '</br>'.$cartuchera->owner.'</br></br>_Colors: </br>'; 
            
         foreach($cartuchera->lapices as $unLapiz){
              echo  $cartucheraLapiz = $unLapiz->color.'</br>';
          }

         //var_dump($cartuchera->lapices);
            
        }

        return view('relaciones');
    }


}
