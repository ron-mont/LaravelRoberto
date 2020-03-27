<?php
namespace App\Http\Controllers;
use App\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    //obtener
    public function index(){
        $empleados = Empleado::all();
        //return App\Empleado::all();
        return $empleados;
    }

	//insertar
      public function insert(){

        //Empleado::create(["nombre" => "Guille"]);
        return Empleado::create(["nombre" => "Guille22"]);

    }

    //Eliminar
      public function elim(){

      	$id = 6;
        Empleado::destroy($id);
    }

    //Actualizar
      public function actual(){
        //update
        Empleado::query()->update(["nombre" => "martin"]);

    }
}
