<?php

namespace caladium\Http\Controllers;

use Illuminate\Http\Request;
use caladium\Http\Requests;
use Session;

class ControllerAsignacion extends Controller
{
    public function vistaasignacion(){

        if(Session::get('log')==1){
        $asignacion = \caladium\Asignacion::select('id_asignacion','nombre_cadena','propietario_asignacion','telefono_asignacion',
        'email_asignacion','estado_asignacion')->from('asignacion')->orderBy('nombre_cadena','asc')->get();
        return view('Auth.asignacion')->with('asignacion', $asignacion);
        } else {
        Session::flash('flash','Por favor inicia sesión');
        return redirect('/');
        }

        
    }
    public function vistaeditarasignacion($id){
        $asignacion = \caladium\Asignacion::where('id_asignacion',$id)->first();
        return view('Update.editarasignacion',['asignacion'=>$asignacion]);
    }
    public function createempresa(Request $request){
        $lista_asignacion = new \caladium\Asignacion;
        $lista_asignacion -> id_asignacion = null;
        $lista_asignacion -> nombre_cadena = $request -> input('Empresa');
        $lista_asignacion -> propietario_asignacion = $request -> input('Propietario');
        $lista_asignacion -> telefono_asignacion = $request -> input('Telefono');
        $lista_asignacion -> email_asignacion = $request -> input('Email');
        $lista_asignacion -> estado_asignacion = 1;
        $lista_asignacion ->save();
        return redirect ('empresa');
    }

    public function editarasignacion(Request $request,$id){
        $data = array(
            'nombre_cadena' => $request->input('nombre'),
            'propietario_asignacion' => $request->input('Propietario'),
            'telefono_asignacion' => $request->input('Telefono'),
            'email_asignacion' => $request->input('Email'),
            
        );
        \caladium\Asignacion::where('id_asignacion', $id)->update($data);
        return redirect ('empresa');
    }


    public function eliminarasignacion($id){
        $asignacion = \caladium\Asignacion::where('id_asignacion',$id)->delete();
        return redirect('empresa');
    }
    
    public function buscarasignacion(Request $request){
        $evaluar = $request -> nombre;
        $asignacion = \caladium\Asignacion::select('id_asignacion','nombre_cadena','propietario_asignacion','telefono_asignacion',
        'email_asignacion','estado_asignacion')->from('asignacion')->where('nombre_cadena','LIKE','%'.$evaluar."%")->orderBy('nombre_cadena', 'asc')->get();
        return view('Auth.asignacion')->with('asignacion', $asignacion);
    }

}
