<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa as Empresa;
class EmpresasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $empresa = Empresa::all();
        return \View::make('empresas.index', compact('empresa'));
    }

    public function search(Request $request)
    {
        
        $empresa = Empresa::where('nombre','like','%'.$request->nombre.'%')->get(); 

        //Cambiando la clausula de conexion soportada por Heroku ya que utiliza postgresql y no mysql
        //$pedidos = Pedido::where('idcliente', '=', $request->idcliente)->get();
        return \View::make('empresas.index',compact('empresa'));
    
    }
    
    public function create()
    {
        return \View::make('empresas.create');
    }

    
    public function store(Request $request)
    {
        $empresa = new Empresa;

        $empresa->nombre = $request->nombre;
        $empresa->calle = $request->calle;
        $empresa->num_ext = $request->num_ext;
        $empresa->num_int = $request->num_int;
        $empresa->colonia = $request->colonia;
        $empresa->cp = $request->cp;
        $empresa->municipio = $request->municipio;
        $empresa->delegacion = $request->delegacion;
        $empresa->estado = $request->estado;
        $empresa->departamentos = $request->departamentos;
        $empresa->contactos = $request->contactos;
        $empresa->estatus = $request->estatus;

        $empresa->save();
        return redirect('empresas');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $empresa = Empresa::find($id);
        return view ('empresas.update',["empresa" => $empresa]);
    }

    
    public function update(Request $request, $id)
    {
        $empresa = Empresa::find($id);;

        $empresa->nombre = $request->nombre;
        $empresa->calle = $request->calle;
        $empresa->num_ext = $request->num_ext;
        $empresa->num_int = $request->num_int;
        $empresa->colonia = $request->colonia;
        $empresa->cp = $request->cp;
        $empresa->municipio = $request->municipio;
        $empresa->delegacion = $request->delegacion;
        $empresa->estado = $request->estado;
        $empresa->departamentos = $request->departamentos;
        $empresa->contactos = $request->contactos;
        $empresa->estatus = $request->estatus;

        if($empresa->save())
        {
            return redirect("empresas");
        }
        else{
            return view("dempresas.edit", ["empresa" => $empresa]);
        }
    }

    
    public function destroy($id)
    {
        $empresa = Empresa::find($id);
        $empresa->delete();
        return redirect()->back();
    }
}
