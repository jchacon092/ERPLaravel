<?php

namespace caladium\Http\Controllers;

use Illuminate\Http\Request;
use caladium\Http\Requests;

class ControllerCliente extends Controller
{
    public function vistacliente(){
        $cliente = \caladium\Cliente::select('id_cliente','nombre_cliente','apellidos_cliente','direccion_cliente','telefono_cliente','celular_cliente','email_cliente',
        'NIT','estado_cliente')->from ('cliente')-> orderBy('nombre_cliente', 'asc')->get();//obtener
        return view('Auth.cliente')-> with('cliente',$cliente);//imprimir los datos por un for each
    }

    public function vistaedirarcliente($id){
        $cliente = \caladium\Cliente:: where ('id_cliente', $id)->first();
        return view ('Update.editarcliente',['cliente'=> $cliente]);//vista editar cliente blade
    }
    public function buscarcliente(Request $request){
        $evaluar = $request -> nombre;
        $cliente = \caladium\Cliente::select('id_cliente','nombre_cliente','apellidos_cliente','direccion_cliente','telefono_cliente','celular_cliente','email_cliente',
        'NIT','estado_cliente')->from ('cliente')->where('nombre_cliente','LIKE','%'.$evaluar."%")->orderBy('nombre_cliente','asc')->get();
        return view('Auth.cliente')->with('cliente',$cliente);
    }
    public function createcliente(Request $request){
        $cliente = new \caladium\Cliente;
        $cliente -> id_cliente =null;
        $cliente -> nombre_cliente= $request -> input ('cliente');
        $cliente -> apellidos_cliente = $request -> input ('apellidos');
        $cliente -> direccion_cliente = $request -> input ('direccion');
        $cliente -> telefono_cliente = $request -> input ('telefono');
        $cliente -> celular_cliente = $request -> input ('celular');
        $cliente -> email_cliente = $request ->input ('email');
        $cliente -> NIT = $request ->input ('nit');
        $cliente -> estado_cliente =1;
        $cliente -> save();
        return redirect('cliente');//esta en la web
    }
    public function editarcliente (Request $request, $id){
        $data = array(
           'nombre_cliente'=> $request -> input ('cliente'),
          'apellidos_cliente'=> $request -> input ('apellidos'),
          'direccion_cliente' =>$request -> input('direccion'),
          'telefono_cliente' =>$request -> input ('telefono'),
          'celular_cliente' => $request -> input ('celular'),
          'email_cliente' =>$request -> input('email'),
          'NIT' => $request -> input ('nit'),
        );
     \caladium\Cliente::where('id_cliente', $id)->update($data);
     return redirect ('cliente');   
    }

    public function eliminarproveedor($id){
        $cliente = \caladium\Cliente::where('id_cliente', $id) ->delete();;
        return redirect('cliente');
    }



}
