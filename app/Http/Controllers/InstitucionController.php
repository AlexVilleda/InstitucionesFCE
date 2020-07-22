<?php

namespace App\Http\Controllers;

use App\Institucion;
use Illuminate\Http\Request;
use App;

class InstitucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $instituciones = App\Institucion::all();
        $instituciones = App\Institucion::paginate(100);
        return view('Instituciones/listar', compact('instituciones'));   //Listar las instituciones
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Para ir al form de agregar institucion
        return view('Instituciones/crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Para guardar las instituciones en la BD
        $nuevaInstitucion = new Institucion;
        $request->validate([
            'nombre'=>'required',
            'tipo'=>'required',
            'direccion'=>'required',
            'sector'=>'required',
        ]);
        $nuevaInstitucion->nombre = $request->nombre;
        $nuevaInstitucion->tipo = $request->tipo;
        $nuevaInstitucion->direccion = $request->direccion;
        $nuevaInstitucion->sector = $request->sector;
        $nuevaInstitucion->save();
        return redirect('Instituciones/crear')->with('agregada', 'Institución agregada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function show(Institucion $institucion)
    {
        //Para mostrar mpas a detalle un instiucion específica
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $institucionActualizar = App\Institucion::findOrFail($id);
        return view('Instituciones/editar', compact('institucionActualizar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $institucionActualizar = App\Institucion::findOrFail($id);
        $institucionActualizar->nombre = $request->nombre;
        $institucionActualizar->tipo = $request->tipo;
        $institucionActualizar->direccion = $request->direccion;
        $institucionActualizar->sector = $request->sector;
        $institucionActualizar->save();
        return back()->with('actualizada', 'Institución actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $institucionEliminar = App\Institucion::findOrFail($id);
        $institucionEliminar->delete();
        return back()->with('eliminada', 'Institución eliminada correctamente');
    }
}
