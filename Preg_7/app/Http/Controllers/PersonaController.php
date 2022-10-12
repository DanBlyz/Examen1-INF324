<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = User::all();

        return view('welcome')->with(compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $persona = new User();
        $persona->ci                = $request->ci;
        $persona->name              = $request->nombre;
        $persona->fecha_nacimiento  = $request->fecha;
        $persona->departamento      = $request->departamento; 
        $persona->email             = null; 
        $persona->save();

        $personas = User::all();

        return view('welcome')->with(compact('personas'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona = User::where('id', $id)->first();

        return view('edit')->with(compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $persona = User::find($id);
        $persona->ci                = $request->ci;
        $persona->name              = $request->nombre;
        $persona->fecha_nacimiento  = $request->fecha;
        $persona->departamento      = $request->departamento; 
        $persona->email             = null; 
        $persona->save();

        $personas = User::all();

        return view('welcome')->with(compact('personas'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);

        $personas = User::all();

        return view('welcome')->with(compact('personas'));
    }
}
