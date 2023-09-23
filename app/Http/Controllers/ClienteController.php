<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['cliente']=Cliente::paginate(1000);
        return view('cliente.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('cliente.registro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $campos=[
            'rut'            => 'required|string|max:100',
            'nombre'         => 'required|string|max:100',
            'apellido'       => 'required|string|max:1000',
            'direccion'      => 'required|string|max:99999',
            'comuna'         => 'required|string|max:100',
            'telefono'       => 'required|numeric|max:1000',
            'nombre_usuario' => 'required|string|max:1000',
            'contraseña'     => 'required|string|max:1000',
        ];

        $mensaje=[
            'required' => 'El :attribute es requerido',
        ];

        $this->validate($request, $campos, $mensaje);
        $datosCliente = request()->except('_token');
        Cliente::insert($datosCliente);
        return redirect()->route('cliente.index');
    }
        

    
    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
        return $cliente;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
