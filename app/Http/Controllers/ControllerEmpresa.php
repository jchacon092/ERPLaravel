<?php

namespace caladium\Http\Controllers;

use Illuminate\Http\Request;
use caladium\Http\Requests;
use Session;

class ControllerEmpresa extends Controller
{
    public function vistaempresa(){

        if(Session::get('log')==1){
        $empresa = \caladium\Empresa::select('id_empresa','id_asignacion','nombre_empresa', 'telefono_empresa' ,
        'ciudad_empresa','direccion_empresa','central_empresa','estado_empresa')->from('empresa')->orderBy('nombre_empresa', 'asc')->get();
        return view('Auth.empresa')->with('empresa',$empresa);
        } else {
        Session::flash('flash','Por favor inicia sesión');
        return redirect('/');
        }
    
    }

    public function vistaeditarempresa($id){ 
        $empresa = \caladium\Empresa::where('id_empresa',$id)->first();
        return view('Update.editarempresa', ['empresa' =>$empresa]);
    }

    public function buscarempresa(Request $request){
        $evaluar = $request -> nombre;
        $empresa = \caladium\Empresa::select('id_empresa','id_asignacion','nombre_empresa', 'telefono_empresa' ,
        'ciudad_empresa','direccion_empresa','central_empresa','estado_empresa')->from('empresa')->where('nombre_empresa','LIKE','%'.$evaluar."%")->orderBy('nombre_empresa', 'asc')->get();
        return view('Auth.empresa')->with('empresa',$empresa);
    }
    
    public function createsucursal(Request $request){
        $lista_empresa = new  \caladium\Empresa;
        $lista_empresa -> id_empresa= null;
        $lista_empresa -> id_asignacion= $request -> input('Asignacion');
        $lista_empresa -> nombre_empresa= $request -> input('Sucursal');
        $lista_empresa -> telefono_empresa = $request -> input('Telefono');
        $lista_empresa -> ciudad_empresa= $request -> input('Ciudad');
        $lista_empresa -> direccion_empresa= $request -> input('Direccion');   
        $lista_empresa -> central_empresa= $request -> input('Central');        
        $lista_empresa -> estado_empresa= 1;
        $lista_empresa ->save();
        return redirect ('sucursal');
    }

    public function editarempresa(Request $request,$id){
        $data = array(
            'id_asignacion' => $request->input('Asignacion'),
            'nombre_empresa' => $request->input('Sucursal'),
            'telefono_empresa' => $request->input('Telefono'),
            'ciudad_empresa' => $request->input('Ciudad'),
            'direccion_empresa' => $request->input('Direccion'),
            'central_empresa' => $request->input('Central'),
            'estado_empresa' => $request->input('Estado'),
        );
        \caladium\Empresa::where('id_empresa', $id)->update($data);
        return redirect ('sucursal');
    }


    public function eliminarempresa($id){
        $actividades = \caladium\Empresa::where('id_empresa', $id)->delete();;
        return redirect('sucursal');
    }

}
