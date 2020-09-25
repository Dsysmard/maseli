<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado as Empleado;
use App\Empresa as Empresa;
use App\Contrato as Contrato;
use App\Puesto as Puesto;
use App\Turno as Turno;
use App\PagoExterno as PagoExterno;
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
        $empleado = Empleado::all();
        $empresa = Empresa::all();
        $contrato = Contrato::all();
        $puesto = Puesto::all();
        $turno = Turno::all();
        $pagos_ext = PagoExterno::all();
        return \View::make('contratos.create', compact('empleado','contrato','empresa','puesto','turno','pagos_ext'));
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
        $empresa = Empresa::all();
        $empleado = Empleado::all();
        $puesto = Puesto::all();
        $turno = Turno::all();
        $pagos_ext = PagoExterno::all();
        return view ('contratos.update',["contrato" => $contrato, "empresa" => $empresa, "empleado" => $empleado, "puesto" => $puesto, "turno" => $turno, "pagos_ext" => $pagos_ext]);
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
