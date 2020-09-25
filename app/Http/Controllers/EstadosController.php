<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado as Estado;
class EstadosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function index()
    {
        $estado = Estado::all();
        return \View::make('estados.index', compact('estado'));
    }

    public function search(Request $request)
    {
        
        $estado = Estado::where('estatus','like','%'.$request->estatus.'%')->get(); 

        //Cambiando la clausula de conexion soportada por Heroku ya que utiliza postgresql y no mysql
        //$pedidos = Pedido::where('idcliente', '=', $request->idcliente)->get();
        return \View::make('estados.index',compact('estado'));
    
    }


    public function create()
    {
        return \View::make('estados.create');
    }


    public function store(Request $request)
    {
        $estado = new Estado;

        $estado->estatus = $request->estatus;


        $estado->save();
        return redirect('estados');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $estado = Estado::find($id);
        return view ('estados.update',["estado" => $estado]);
    }

 
    public function update(Request $request, $id)
    {
        $estado = Estado::find($id);;

        $estado->estatus = $request->estatus;

        if($estado->save())
        {
            return redirect("estados");
        }
        else{
            return view("estados.edit", ["estado" => $estado]);
        }
    }


    public function destroy($id)
    {
        $estado = Estado::find($id);
        $estado->delete();
        return redirect()->back();
    }
}
