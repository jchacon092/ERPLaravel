<?php

namespace caladium\Http\Controllers;

use Illuminate\Http\Request;
use caladium\Http\Requests;
use Session;
class ControllerProveedor extends Controller
{
    public function vistaproveedor(){

            if(Session::get('log')==1){
            $proveedor = \caladium\Proveedor::select('id_proveedor','nombre_proveedor','direccion_proveedor', 'telefono_proveedor' ,
            'email_proveedor','estado_proveedor')->from('proveedor')->orderBy('nombre_proveedor', 'asc')->get();
            return view('Auth.proveedor')->with('proveedor',$proveedor);
            } else {
            Session::flash('flash','Por favor inicia sesión');
            return redirect('/');
            }
        
    }

    public function vistaeditarproveedor($id){ 
        $proveedor = \caladium\Proveedor::where('id_proveedor',$id)->first();
        return view('Update.editarproveedor', ['proveedor' =>$proveedor]);
    }

    public function buscarproveedor(Request $request){
        $evaluar = $request -> nombre;
        $proveedor = \caladium\Proveedor::select('id_proveedor','nombre_proveedor','direccion_proveedor', 'telefono_proveedor' ,
        'email_proveedor','estado_proveedor')->from('proveedor')->where('nombre_proveedor','LIKE','%'.$evaluar."%")->orderBy('nombre_proveedor', 'asc')->get();
        return view('Auth.proveedor')->with('proveedor',$proveedor);
    }

    public function createproveedor(Request $request){
        $lista_proveedor = new  \caladium\Proveedor;
        $lista_proveedor -> id_proveedor= null;
        $lista_proveedor -> nombre_proveedor= $request -> input('proveedor');
        $lista_proveedor -> direccion_proveedor = $request -> input('direccion');
        $lista_proveedor -> telefono_proveedor= $request -> input('telefono');
        $lista_proveedor -> email_proveedor= $request -> input('email');        
        $lista_proveedor -> estado_proveedor= 1;
        $lista_proveedor ->save();
        return redirect ('proveedor');
    }
    public function editarproveedor(Request $request,$id){
        $data = array(
            'nombre_proveedor' => $request->input('proveedor'),
            'direccion_proveedor' => $request->input('direccion'),
            'telefono_proveedor' => $request->input('telefono'),
            'email_proveedor' => $request->input('email'),
        );
        \caladium\Proveedor::where('id_proveedor', $id)->update($data);
        return redirect ('proveedor');
    }


    public function eliminarproveedor($id){
        $actividades = \caladium\Proveedor::where('id_proveedor', $id)->delete();;
        return redirect('proveedor');
    }


}
