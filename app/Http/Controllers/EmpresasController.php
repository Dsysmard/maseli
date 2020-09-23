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

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
