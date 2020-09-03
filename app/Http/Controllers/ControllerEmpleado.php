<?php

namespace caladium\Http\Controllers;

use Illuminate\Http\Request;
use caladium\Http\Requests;
use Session;

class ControllerEmpleado extends Controller
{
    public function vistaempleado(){

        if(Session::get('log')==1){
        $empleado = \caladium\Proveedor::select('id_empleado','nombre_empleado','apellido_empleado', 'direccion_empleado' ,
        'telefono_empleado','celular_empleado','email_empleado','edad','DPI','fecha_contrato','estado_empleado')->from('empleado')->orderBy('nombre_empleado', 'asc')->get();
        return view('Auth.empleado')->with('empleado',$empleado);
        } else {
        Session::flash('flash','Por favor inicia sesión');
        return redirect('/');
        }
    
    }

    public function vistaeditarempleado($id){ 
        $empleado = \caladium\Proveedor::where('id_empleado',$id)->first();
        return view('Update.editarempleado', ['empleado' =>$empleado]);
    }

    public function buscarempleado(Request $request){
        $evaluar = $request -> nombre;
        $empleado = \caladium\Proveedor::select('id_empleado','nombre_empleado','apellido_empleado', 'direccion_empleado',
        'telefono_empleado','celular_empleado','email_empleado','edad','DPI','fecha_contrato','estado_empleado')->from('empleado')->where('nombre_empleado','LIKE','%'.$evaluar."%")->orderBy('nombre_empleado', 'asc')->get();
        return view('Auth.empleado')->with('empleado',$empleado);
    }
}
