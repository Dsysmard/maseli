<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PagoExterno as PagoExterno;

class PagosExternosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pagoext = PagoExterno::all();
        return \View::make('pagos.externos.index', compact('pagoext'));
    }

    public function search(Request $request)
    {
        
        $pagoext = PagoExterno::where('nombre_pago','like','%'.$request->nombre_pago.'%')->get(); 

        //Cambiando la clausula de conexion soportada por Heroku ya que utiliza postgresql y no mysql
        //$pedidos = Pedido::where('idcliente', '=', $request->idcliente)->get();
        return \View::make('pagos.externos.index',compact('pagoext'));
    
    }


    public function create()
    {
        $pagoext = PagoExterno::all();
        return \View::make('pagos.externos.create', compact('pagoext'));
    }

 
    public function store(Request $request)
    {
        $pagoext = new PagoExterno;

        $pagoext->nombre_pago = $request->nombre_pago;
        

        $pagoext->save();
        return redirect('pagosext');
    }

 
    public function show($id)
    {
        //
    }

 
    public function edit($id)
    {
        $pagoext = PagoExterno::find($id);
        return view ('pagos.externos.index',["pagoext" => $pagoext]);
    }


    public function update(Request $request, $id)
    {
        $pagoext = PagoExterno::find($id);;

        $pagoext->nombre_pago = $request->nombre_pago;

        if($pagoext->save())
        {
            return redirect("pagosext");
        }
        else{
            return view("pagos.externos.edit", ["pagoext" => $pagoext]);
        }
    }

 
    public function destroy($id)
    {
        $pagoext = PagoExterno::find($id);
        $pagoext->delete();
        return redirect()->back();
    }
}
