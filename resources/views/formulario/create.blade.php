@extends('layouts.app') @section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card border-primary mb-3">
                <div class="card-header text-center bg-primary border-primary text-white">
                    <strong>DATOS PERSONALES</strong>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-success">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br /> @endif


                    <form method="post" action="{{ route('formulario.store') }}">

                        <div class="form-row">
                            @csrf
                            <div class="form-group col-md-6">
                                <label for="Tipo_Documento">Tipo de Documento<span style="color: #e74a3b;">(*)</span></label>
                                <select type="text" class="form-control" name="Tipo_Documento" required>
                                    <option selected>DNI</option>
                                    <option>Carnet de Extranjeria</option>
                                    <option>Pasaporte</option>
                                    <option>Cedula de Identidad</option>
                                    <option>Carnet de solicitante de refugio</option>
                                    <option>Sin Documento</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="Nro_Documento">Numero de Documento <span style="color: #e74a3b;">(*)</span></label>
                                <input type="number" class="form-control" name="Nro_Documento" required/>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="Nombres">Nombres y Apellidos <span style="color: #e74a3b;">(*)</span></label>
                                <input type="text" class="form-control" name="Nombres" placeholder="Ingrese sus Nombres y Apellidos" required />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="Telefono">Telefono/Celular <span style="color: #e74a3b;">(*)</span></label>
                                <input type="number" class="form-control" name="Telefono" placeholder="Ingrese sus telefono o celular" required />
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="Fecha_Nacimiento"> Fecha Nacimiento </label>
                                <div class='input-group date' id='datetimepicker1'>
                                    <input type='text' class="form-control" name="Fecha_Nacimiento" placeholder="dd/MM/aaaa (dia/mes/año)" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group col-md-2">
                                <label for="Edad"> Edad <span style="color: #e74a3b;">(*)</span> </label>
                                <input type="number" class="form-control" name="Edad" required>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="Sexo">Sexo</label>
                                <select id="Sexo" class="form-control" name="Sexo">
                                    <option>-- Seleccione sexo --</option>
                                    <option>Masculino</option>
                                    <option>Femenino</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="Provincia">Provincia</label>
                                <select class="form-control dynamic provincia" name="Provincia" id="provincia">
                                <option>-- Seleccione provincia --</option>
                                    @foreach($provincia as $key => $valor)
                                        <option valor="{{ $valor }}">{{ $valor }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="Distrito">Distrito</label>
                                <select name="Distrito" class="form-control dynamic distrito" id="distrito">
                                <option>-- Seleccione distrito --</option>
                                    @foreach($distrito as $key => $valor)
                                        <option valor="{{ $valor }}">{{ $valor }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="Residencia">Residencia</label>
                                <input type="text" class="form-control" name="Residencia" placeholder="Ingrese su residencia habitual">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="Direccion_Exacta">Direccion Exacta <span style="color: #e74a3b;">(*)</span></label>
                                <input type="text" class="form-control" name="Direccion_Exacta" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Referencia_Direccion">Referencia de Direccion</label>
                                <input type="text" class="form-control" name="Referencia_Direccion">
                            </div>
                        </div>
                        <br />
                        <!-- Evaluacion -->

                        <div class="row">
                            <div class="col">
                                <div class="card border-primary mb-3">
                                    <div class="card-header text-center bg-primary border-primary text-white">
                                        <strong>EVALUACION</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="form-group">
                                                <label for="Fiebre">1. Usted a presentado o tiene</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="Fiebre">
                                                    <label class="form-check-label" for="Fiebre">
                                                Fiebre
                                                </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="Tos">
                                                    <label class="form-check-label" for="Tos">
                                                Tos
                                                </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="Dolor_Garganta">
                                                    <label class="form-check-label" for="Dolor_Garganta">
                                                Dolor de Garganta
                                                </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="Dificultar_Respirar">
                                                    <label class="form-check-label" for="Dificultar_Respirar">
                                                Dificultad para respirar o siente falta de aire
                                                </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="Congestion">
                                                    <label class="form-check-label" for="Congestion">
                                                Congestion nasal o nariz tapada
                                                </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="Cansancio">
                                                    <label class="form-check-label" for="Cansancio">
                                                Siente cansancio y que normalmente no puede hacer sus actividades
                                                </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="Inicio_Sintomas">2. Fecha de inicio de Sintomas</label>
                                            <input type="datetime" class="form-control" name="Inicio_Sintomas" placeholder="dd/MM/aaaa (dia/mes/año)">
                                        </div>

                                        <div class="form-group">
                                            <label for="Contacto">3. En los ultimos dias ha tenido contacto con personas con diagnostico confirmado de coronavirus?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="Contacto" id="Contacto" va="option1" checked>
                                                <label class="form-check-label" for="Contacto">
                                            Si
                                            </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="Contacto" id="Contacto" va="option2">
                                                <label class="form-check-label" for="Contacto">
                                            No
                                            </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="Desplazo">4. En los ultimos 14 dias se desplazo a diferentes distritos de donde vive?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="Desplazo" id="Desplazo" va="option1" checked>
                                                <label class="form-check-label" for="Desplazo">
                                            Si
                                            </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="Desplazo" id="Desplazo" va="option2">
                                                <label class="form-check-label" for="Desplazo">
                                            No
                                            </label>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group">
                                                <label for="Obesidad">5. Tiene usted algunos de estos problemas de salud</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="Obesidad">
                                                    <label class="form-check-label" for="Obesidad">
                                                Obesidad
                                                </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="Pulmonar">
                                                    <label class="form-check-label" for="Pulmonar">
                                                Enfermedades pulmonar crónica
                                                </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="Diabetes">
                                                    <label class="form-check-label" for="Diabetes">
                                                Diabetes
                                                </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="Hipertension">
                                                    <label class="form-check-label" for="Hipertension">
                                                Hipertensión
                                                </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="Gestante">
                                                    <label class="form-check-label" for="Gestante">
                                                Gestante
                                                </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="Mayor">
                                                    <label class="form-check-label" for="Mayor">
                                                Mayor de 65 años
                                                </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="Otro">
                                                    <label class="form-check-label" for="Otro">
                                                Otro
                                                </label>
                                                    <input type="text" class="form-control" name="Otro_Detalle" placeholder="Especifique por favor">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="Personas_vive">6. Cuantas personas viven en su casa</label>
                                            <input type="number" class="form-control" name="Personas_vive" placeholder="0">
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group">
                                                <label for="Personal_salud">7. Algunos de ellos esta en estos grupos de riesgo</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="Personal_salud">
                                                    <label class="form-check-label" for="Personal_salud">
                                                Ser personal de salud
                                                </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="Comorbilidad">
                                                    <label class="form-check-label" for="Comorbilidad">
                                                Mayor de 65 años y comorbilidad
                                                </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="Comorbiliadad_Menor">
                                                    <label class="form-check-label" for="Comorbiliadad_Menor">
                                                Menor de 65 años y comorbilidad
                                                </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="Gestante_grupo">
                                                    <label class="form-check-label" for="Gestante_grupo">
                                                Gestante
                                                </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="Vivienda">
                                                    <label class="form-check-label" for="Vivienda">
                                                Personas en vivienda con factores de riesgo
                                                </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-success btn-lg" id="alerta">Enviar Tamizaje</button>
                </div>
            </div>

            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    const alerta = document.querySelector('#alerta');

    alerta.addEventListener('click', () => {


        toastr.success('Su tamizaje fue enviado con exito','Diresa Junin',{
            "progressBar": true
        });
    })
</script>

@endsection
