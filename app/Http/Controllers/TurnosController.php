<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turno as Turno;
class TurnosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $turno = Turno::all();
        return \View::make('turnos.index', compact('turno'));
    }

    public function search(Request $request)
    {
        
        $turno = Turno::where('nombre_turno','like','%'.$request->nombre_turno.'%')->get(); 

        //Cambiando la clausula de conexion soportada por Heroku ya que utiliza postgresql y no mysql
        //$pedidos = Pedido::where('idcliente', '=', $request->idcliente)->get();
        return \View::make('turnos.index',compact('turno'));
    
    }

    public function create()
    {
        return \View::make('turnos.create');
    }


    public function store(Request $request)
    {
        $turno = new Turno;

        $turno->nombre_turno = $request->nombre_turno;
        $turno->horario = $request->horario;

        $turno->save();
        return redirect('turnos');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $turno = Turno::find($id);
        return view ('turnos.update',["turno" => $turno]);
    }


    public function update(Request $request, $id)
    {
        $turno = Turno::find($id);;

        $turno->nombre_turno = $request->nombre_turno;
        $turno->horario = $request->horario;

        if($turno->save())
        {
            return redirect("turnos");
        }
        else{
            return view("turnos.edit", ["turno" => $turno]);
        }
    }


    public function destroy($id)
    {
        $turno = Turno::find($id);
        $turno->delete();
        return redirect()->back();
    }
}
