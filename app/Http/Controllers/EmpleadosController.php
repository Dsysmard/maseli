<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado as Empleado;

class EmpleadosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function index()
    {
        $empleado = Empleado::all();
        return \View::make('empleados.index', compact('empleado'));
    }

    public function search(Request $request)
    {
        
        $empleado = Empleado::where('nombre','like','%'.$request->nombre.'%')->get(); 

        //Cambiando la clausula de conexion soportada por Heroku ya que utiliza postgresql y no mysql
        //$pedidos = Pedido::where('idcliente', '=', $request->idcliente)->get();
        return \View::make('empleados.index',compact('empleado'));
    
    }


    public function create()
    {
        return \View::make('empleados.create');
    }


    public function store(Request $request)
    {
        $empleado = new Empleado;

        $empleado->nombre = $request->nombre;
        $empleado->ap_paterno = $request->ap_paterno;
        $empleado->ap_materno = $request->ap_materno;
        $empleado->fecha_nacimiento = $request->fecha_nacimiento;
        $empleado->genero = $request->genero;
        $empleado->curp = $request->curp;
        $empleado->rfc = $request->rfc;
        $empleado->nss = $request->nss;
        $empleado->infonavit = $request->infonavit;
        $empleado->desc_infonavit = $request->desc_infonavit;
        $empleado->calle = $request->calle;
        $empleado->num_ext = $request->num_ext;
        $empleado->num_int = $request->num_int;
        $empleado->colonia = $request->colonia;
        $empleado->cp = $request->cp;
        $empleado->municipio = $request->municipio;
        $empleado->delegacion = $request->delegacion;
        $empleado->estado = $request->estado;
        $empleado->telefono = $request->telefono;
        $empleado->email = $request->email;
        $empleado->banco = $request->banco;
        $empleado->tdd = $request->tdd;
        $empleado->fecha_ingreso = $request->fecha_ingreso;
        $empleado->fecha_baja = $request->fecha_baja;
        $empleado->motivo_baja = $request->motivo_baja;
        $empleado->observaciones = $request->observaciones;


        $empleado->save();
        return redirect('empleados');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $empleado = Empleado::find($id);
        return view ('empleados.update',["empleado" => $empleado]);
    }


    public function update(Request $request, $id)
    {
        $empleado = Empleado::find($id);;

        $empleado->nombre = $request->nombre;
        $empleado->ap_paterno = $request->ap_paterno;
        $empleado->ap_materno = $request->ap_materno;
        $empleado->fecha_nacimiento = $request->fecha_nacimiento;
        $empleado->genero = $request->genero;
        $empleado->curp = $request->curp;
        $empleado->rfc = $request->rfc;
        $empleado->nss = $request->nss;
        $empleado->infonavit = $request->infonavit;
        $empleado->desc_infonavit = $request->desc_infonavit;
        $empleado->calle = $request->calle;
        $empleado->num_ext = $request->num_ext;
        $empleado->num_int = $request->num_int;
        $empleado->colonia = $request->colonia;
        $empleado->cp = $request->cp;
        $empleado->municipio = $request->municipio;
        $empleado->delegacion = $request->delegacion;
        $empleado->estado = $request->estado;
        $empleado->telefono = $request->telefono;
        $empleado->email = $request->email;
        $empleado->banco = $request->banco;
        $empleado->tdd = $request->tdd;
        $empleado->fecha_ingreso = $request->fecha_ingreso;
        $empleado->fecha_baja = $request->fecha_baja;
        $empleado->motivo_baja = $request->motivo_baja;
        $empleado->observaciones = $request->observaciones;

        if($empleado->save())
        {
            return redirect("empleados");
        }
        else{
            return view("empleados.edit", ["empleado" => $empleado]);
        }
    }


    public function destroy($id)
    {
        $empleado = Empleado::find($id);
        $empleado->delete();
        return redirect()->back();
    }
}
