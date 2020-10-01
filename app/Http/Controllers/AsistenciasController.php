<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asistencia as Asistencia;

class AsistenciasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
  
    public function index()
    {
        $asistencia = Asistencia::all();
        return \View::make('asistencias.index', compact('asistencia'));
    }

    public function search(Request $request)
    {
        
        $asistencia = Asistencia::where('empleado','like','%'.$request->empleado.'%')->get(); 

        //Cambiando la clausula de conexion soportada por Heroku ya que utiliza postgresql y no mysql
        //$pedidos = Pedido::where('idcliente', '=', $request->idcliente)->get();
        return \View::make('asistencias.index',compact('asistencia'));
    
    }

   
    public function create()
    {
        return \View::make('asistencias.create');
    }

   
    public function store(Request $request)
    {
        $asistencia = new Asistencia;

        $asistencia->empleado = $request->empleado;
        $asistencia->empresa = $request->empresa;
        $asistencia->turno = $request->turno;
        $asistencia->fecha = $request->fecha;
        $asistencia->asistencia = $request->asistencia;
        $asistencia->falta_justificada = $request->falta_justificada;
        $asistencia->falta_injustificada = $request->falta_injustificada;
        $asistencia->observaciones = $request->observaciones;
        


        $asistencia->save();
        return redirect('asistencias');
    }

 
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $asistencia = Asistencia::find($id);
        return view ('asistencias.update',["asistencia" => $asistencia]);
    }

   
    public function update(Request $request, $id)
    {
        $asistencia = Asistencia::find($id);;

        $asistencia->empleado = $request->empleado;
        $asistencia->empresa = $request->empresa;
        $asistencia->turno = $request->turno;
        $asistencia->fecha = $request->fecha;
        $asistencia->asistencia = $request->asistencia;
        $asistencia->falta_justificada = $request->falta_justificada;
        $asistencia->falta_injustificada = $request->falta_injustificada;
        $asistencia->observaciones = $request->observaciones;

        if($asistencia->save())
        {
            return redirect("asistencias");
        }
        else{
            return view("asistencias.edit", ["asistencia" => $asistencia]);
        }
    }

  
    public function destroy($id)
    {
        $asistencia = Asistencia::find($id);
        $asistencia->delete();
        return redirect()->back();
    }
}
