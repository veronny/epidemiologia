@extends('layouts.app') @section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="uper">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>

    <br /> @endif
        <table class="table table-sm table-striped">
            <thead>
                <tr>
                    <td>Tipo_Documento</td>
                    <td>Nro_Documento</td>
                    <td>Nombres</td>
                    <td>Telefono</td>
                    <td>Fecha_Nacimiento</td>
                    <td>Edad</td>
                    <td>Sexo</td>
                    <td>Residencia</td>
                    <td>Provincia</td>
                    <td>Distrito</td>
                    <td>Direccion_Exacta</td>
                    <td>Referencia_Direccion<td>
                    <td>Fiebre</td>
                    <td>Tos</td>
                    <td>Dolor_Garganta</td>
                    <td>Dificultar_Respirar</td>
                    <td>Congestion</td>
                    <td>Cansancio</td>
                    <td>Inicio_Sintomas</td>
                    <td>Contacto</td>
                    <td>Desplazo</td>
                    <td>Obesidad</td>
                    <td>Pulmonar</td>
                    <td>Diabetes</td>
                    <td>Hipertension</td>
                    <td>Gestante</td>
                    <td>Mayor</td>
                    <td>Otro</td>
                    <td>Otro_Detalle</td>
                    <td>Personas_vive</td>
                    <td>Personal_salud</td>
                    <td>Comorbilidad</td>
                    <td>Comorbiliadad_Menor</td>
                    <td>Gestante_grupo</td>
                    <td>Vivienda</td>                                                                                                                                                                          <td>
                </tr>
            </thead>
            <tbody>
                @foreach($coronacases as $case)
                <tr>
                    <td>{{$case->Tipo_Documento}}</td>
                    <td>{{$case->Nro_Documento}}</td>
                    <td>{{$case->Nombres}}</td>
                    <td>{{$case->Telefono}}</td>
                    <td>{{$case->Fecha_Nacimiento}}</td>
                    <td>{{$case->Edad}}</td>
                    <td>{{$case->Sexo}}</td>
                    <td>{{$case->Residencia}}</td>
                    <td>{{$case->Provincia}}</td>
                    <td>{{$case->Distrito}}</td>
                    <td>{{$case-> Direccion_Exacta}}</td>
                    <td>{{$case->Referencia_Direccion}}</td>
                    <td>{{$case->Fiebre}}</td>
                    <td>{{$case->Tos}}</td>
                    <td>{{$case->Dolor_Garganta}}</td>
                    <td>{{$case->Dificultar_Respirar}}</td>
                    <td>{{$case->Congestion}}</td>
                    <td>{{$case->Cansancio}}</td>
                    <td>{{$case->Inicio_Sintomas}}</td>
                    <td>{{$case->Contacto}}</td>
                    <td>{{$case->Desplazo}}</td>
                    <td>{{$case->Obesidad}}</td>
                    <td>{{$case->Pulmonar}}</td>
                    <td>{{$case->Diabetes}}</td>
                    <td>{{$case->Hipertension}}</td>
                    <td>{{$case->Gestante}}</td>
                    <td>{{$case->Mayor}}</td>
                    <td>{{$case->Otro}}</td>
                    <td>{{$case->Otro_Detalle}}</td>
                    <td>{{$case->Personas_vive}}</td>
                    <td>{{$case->Personal_salud}}</td>
                    <td>{{$case->Comorbilidad}}</td>
                    <td>{{$case->Comorbiliadad_Menor}}</td>
                    <td>{{$case->Gestante_grupo}}</td>
                    <td>{{$case->Vivienda}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

@endsection
