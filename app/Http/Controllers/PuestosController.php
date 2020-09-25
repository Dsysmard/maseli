<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Puesto as Puesto;

class PuestosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $puesto = Puesto::all();
        return \View::make('puestos.index', compact('puesto'));
    }

    public function search(Request $request)
    {
        
        $puesto = Puesto::where('nombre_puesto','like','%'.$request->nombre_puesto.'%')->get(); 

        //Cambiando la clausula de conexion soportada por Heroku ya que utiliza postgresql y no mysql
        //$pedidos = Pedido::where('idcliente', '=', $request->idcliente)->get();
        return \View::make('puestos.index',compact('puesto'));
    
    }

 
    public function create()
    {
        return \View::make('puestos.create');
    }


    public function store(Request $request)
    {
        $puesto = new Puesto;

        $puesto->nombre_puesto = $request->nombre_puesto;
        

        $puesto->save();
        return redirect('puestos');
    }


    public function show($id)
    {
        //
    }

 
    public function edit($id)
    {
        $puesto = Puesto::find($id);
        return view ('puestos.update',["puesto" => $puesto]);
    }


    public function update(Request $request, $id)
    {
        $puesto = Puesto::find($id);;

        $puesto->nombre_puesto = $request->nombre_puesto;

        if($puesto->save())
        {
            return redirect("puestos");
        }
        else{
            return view("puestos.edit", ["puesto" => $puesto]);
        }
    }

 
    public function destroy($id)
    {
        $puesto = Puesto::find($id);
        $puesto->delete();
        return redirect()->back();
    }
}
