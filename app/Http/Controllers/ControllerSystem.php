<?php

namespace caladium\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class ControllerSystem extends Controller
{

    public function vistaregister(){
        return view('Auth.registrar');
    }

    public function vistahome(){

        if(Session::get('log')==1){
        return view('Auth.home');
        } else {
        Session::flash('flash','Por favor inicia sesión');
        return redirect('/');
        }
    }
    public function vistalogin(){
        return view('Auth.Login');
    }
}
