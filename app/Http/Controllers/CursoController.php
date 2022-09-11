<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Curso;
use Illuminate\Http\Request;
use Flash;
class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index',compact('cursos'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=[
            'nombre' => 'required |string',
            'descripcion' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
            'estado' => 'required'
        ];

        $mensaje = [
            'required' => 'El :attribute es requerido',
            'descripcion.required' => 'La descripcion es requerida',
            'fecha_inicio.required' => 'La fecha de inicio es requerida',
            'fecha_fin.required' => 'La fecha de finalizacion es requerida',
        ];
        $this->validate($request, $rules, $mensaje);

        $cursos= request()->except('_token');
        Curso::insert($cursos);
        Flash::success('Creado correctamente');
        return redirect (route('cursos.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cursos = Curso::findorFail($id);
        return view('cursos.show',compact('cursos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cursos = Curso::findorFail($id);
        return view('cursos.edit',compact('cursos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cursos=request()->except(['_token','_method']);
        Curso::where('id','=',$id)->update($cursos);
        Flash::success('Actualizado correctamente');
        return redirect ('cursos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Curso::destroy($id);
        Flash::error('Eliminado correctamente');
        return redirect('cursos');
    }
}
