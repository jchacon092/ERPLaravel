<?php

namespace caladium\Http\Controllers;

use Illuminate\Http\Request;
use caladium\Http\Requests;
use Session;

class ControllerCategoria extends Controller
{
    public function vistacategoria()
    {
        if(Session::get('log')==1){
            $categoria = \caladium\Categoria::select('id_categoria','nombre_categoria','estado_categoria')->from('categoria')->orderBy('id_categoria', 'asc')->get();
            return view('Auth.categoria')->with('categoria',$categoria);
            } else {
            Session::flash('flash','Por favor inicia sesión');
            return redirect('/');
            }
    }

    public function vistaeditarcategoria($id){ 
        $categoria = \caladium\Categoria::where('id_categoria',$id)->first();
        return view('Update.editarcategoria', ['categoria' =>$categoria]);
    }

    public function buscarcategoria(Request $request){
        $evaluar = $request -> nombre;
        $categoria = \caladium\Categoria::select('id_categoria','nombre_categoria','estado_categoria')->from('categoria')->where('nombre_categoria','LIKE','%'.$evaluar."%")->orderBy('nombre_categoria', 'asc')->get();
        return view('Auth.categoria')->with('categoria',$categoria);
    }
    
    public function createcategoria(Request $request){
        $lista_categoria = new  \caladium\Categoria;
        $lista_categoria -> id_categoria= null;
        $lista_categoria -> nombre_categoria= $request -> input('Asignacion');        
        $lista_categoria -> estado_categoria= 1;
        $lista_categoria ->save();
        return redirect ('categoria');
    }

    public function editarcategoria(Request $request,$id){
        $data = array(
            'nombre_categoria' => $request->input('Asignacion'),
            'estado_categoria' => $request->input('Estado'),
        );
        \caladium\Categoria::where('id_categoria', $id)->update($data);
        return redirect ('categoria');
    }


    public function eliminarcategoria($id){
        $actividades = \caladium\Categoria::where('id_categoria', $id)->delete();;
        return redirect('categoria');
    }
}
