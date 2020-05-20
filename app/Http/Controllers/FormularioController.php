<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Encuesta;
use Illuminate\Support\Facades\DB;


class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coronacases = Encuesta::all();

        return view('formulario.index', compact('coronacases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $provincia = DB::table('indicador_sulfato')
        ->select([DB::raw('PROVINCIA')])
        ->groupBy('PROVINCIA')
        ->get()->toArray();
        $provincia = array_column($provincia,'PROVINCIA');

        // Distrito
        $distrito = DB::table('indicador_sulfato')
            ->select([DB::raw('DISTRITO')])
            ->groupBy('DISTRITO')
            ->get()->toArray();
        $distrito = array_column($distrito,'DISTRITO');

        return view('formulario.create',compact('provincia','distrito'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Tipo_Documento' => 'required|max:255',
            'Nro_Documento' => 'required|numeric',
            'Nombres' => 'required|max:255',
            'Telefono' => 'required|numeric',
            'Fecha_Nacimiento'  => 'nullable',
            'Edad' => 'required|numeric',
            'Sexo' => 'nullable',
            'Residencia' => 'nullable',
            'Provincia' => 'nullable',
            'Distrito' => 'nullable',
            'Direccion_Exacta' => 'required',
            'Referencia_Direccion' => 'nullable',
            'Fiebre' => 'nullable',
            'Tos' => 'nullable',
            'Dolor_Garganta' => 'nullable',
            'Dificultar_Respirar' => 'nullable',
            'Congestion' => 'nullable',
            'Cansancio' => 'nullable',
            'Inicio_Sintomas' => 'nullable',
            'Contacto' => 'nullable',
            'Desplazo' => 'nullable',
            'Obesidad' => 'nullable',
            'Pulmonar' => 'nullable',
            'Diabetes' => 'nullable',
            'Hipertension' => 'nullable',
            'Gestante' => 'nullable',
            'Mayor' => 'nullable',
            'Otro' => 'nullable',
            'Otro_Detalle' => 'nullable',
            'Personas_vive' => 'nullable',
            'Personal_salud' => 'nullable' ,
            'Comorbilidad' => 'nullable',
            'Comorbiliadad_Menor' => 'nullable',
            'Gestante_grupo' => 'nullable',
            'Vivienda' => 'nullable',

        ]);

        $show = Encuesta::create($validatedData);

       // return redirect('/formulario/create')->with('message', 'Datos cargados correctamente');
       //return redirect('formulario.create')->with('message', 'Datos cargados correctamente');
       //return redirect()->route('formulario.show')->with('message', 'Datos cargados correctamente');
        return back()->withErrors(['field_name' => ['Datos enviados correctamente']]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Nro_Documento)
    {
        $coronacase = Encuesta::findOrFail($Nro_Documento);

        return view('formulario.edit', compact('coronacase'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
