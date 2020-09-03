<?php

namespace caladium\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
class ControllerLogin extends Controller
{

    

    public function register (Request $request){
        $registro = new  \caladium\Usuario;
        $registro -> id_usuario= $request -> input('user');
        $registro -> id_empleado= $request -> input('empleado');
        $registro -> pass_usuario = Hash::make($request -> input('password')) ;
        $registro -> estado_usuario = 1;
        $registro ->save();
        return redirect ('/');
    }

    public function login (Request $request){

        $usuario = $request -> inputUser;
        $pass = $request -> inputPassword;
        $hash = \caladium\Usuario::select('pass_usuario','id_usuario')
        ->from('usuario')->where('id_usuario', $usuario)->get();
        $dato = []; 
        foreach ($hash as $recorrido) {
        $dato[] = $recorrido->pass_usuario;
        $dato[] = $recorrido->id_usuario;
        }

        if(empty($dato[0]) && empty($dato[1]) )
        {
            Session::flash('flash','Tus credenciales son incorrectas');
            return redirect('/');
        } else {

        if(Hash::check($pass,$dato[0]))
        {
         Session::put('log',1);
         Session::put('user',$dato[1]);
         return redirect('home');
        }
        else
        {
            Session::flash('flash','Tus credenciales son incorrectas');
            return redirect('/');
        }
                }
       }

       public function logout(){
           Session::forget('log');
           Session::forget('user');
           return redirect('/');
       }


}
