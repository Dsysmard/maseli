<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado as Empleado;
use App\Empresa as Empresa;
use App\Contrato as Contrato;

class ContratosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    public function index()
    {
        $contrato = Contrato::all();
        return \View::make('contratos.index', compact('contrato'));
    }

    public function search(Request $request)
    {
        
        $contrato = Contrato::where('empleado','like','%'.$request->empleado.'%')->get(); 

        //Cambiando la clausula de conexion soportada por Heroku ya que utiliza postgresql y no mysql
        //$pedidos = Pedido::where('idcliente', '=', $request->idcliente)->get();
        return \View::make('contratos.index',compact('contrato'));
    
    }

    public function create()
    {
        return \View::make('contratos.create');
    }


    public function store(Request $request)
    {
        $contrato = new Contrato;

        $contrato->empleado = $request->empleado;
        $contrato->empresa = $request->empresa;
        $contrato->departamento = $request->departamento;
        $contrato->pago_externo = $request->pago_externo;
        $contrato->supervisor = $request->supervisor;
        $contrato->supervisor_asignado = $request->supervisor_asignado;
        $contrato->puesto = $request->puesto;
        $contrato->turno = $request->turno;
        $contrato->horario = $request->horario;
        $contrato->sueldo = $request->sueldo;
        $contrato->bono = $request->bono;
        $contrato->observaciones = $request->observaciones;
        $contrato->estatus = $request->estatus;
    
        $contrato->save();
        return redirect('contratos');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $contrato = Contrato::find($id);
        return view ('contratos.update',["contrato" => $contrato]);
    }


    public function update(Request $request, $id)
    {
        $contrato = Contrato::find($id);;

        $contrato->empleado = $request->empleado;
        $contrato->empresa = $request->empresa;
        $contrato->departamento = $request->departamento;
        $contrato->pago_externo = $request->pago_externo;
        $contrato->supervisor = $request->supervisor;
        $contrato->supervisor_asignado = $request->supervisor_asignado;
        $contrato->puesto = $request->puesto;
        $contrato->turno = $request->turno;
        $contrato->horario = $request->horario;
        $contrato->sueldo = $request->sueldo;
        $contrato->bono = $request->bono;
        $contrato->observaciones = $request->observaciones;
        $contrato->estatus = $request->estatus;

        if($contrato->save())
        {
            return redirect("contratos");
        }
        else{
            return view("contratos.edit", ["contrato" => $contrato]);
        }
    }


    public function destroy($id)
    {
        $contrato = Contrato::find($id);
        $contrato->delete();
        return redirect()->back();
    }
}
