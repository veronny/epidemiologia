<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    protected $table = 'encuesta';

    protected $fillable = ['Tipo_Documento',
                            'Nro_Documento',
                            'Nombres',
                            'Telefono',
                            'Fecha_Nacimiento',
                            'Edad',
                            'Sexo',
                            'Residencia',
                            'Provincia',
                            'Distrito',
                            'Direccion_Exacta',
                            'Referencia_Direccion',
                            'Fiebre',
                            'Tos',
                            'Dolor_Garganta',
                            'Dificultar_Respirar',
                            'Congestion',
                            'Cansancio',
                            'Inicio_Sintomas',
                            'Contacto',
                            'Desplazo',
                            'Obesidad',
                            'Pulmonar',
                            'Diabetes',
                            'Hipertension',
                            'Gestante',
                            'Mayor',
                            'Otro',
                            'Otro_Detalle',
                            'Personas_vive',
                            'Personal_salud',
                            'Comorbilidad',
                            'Comorbiliadad_Menor',
                            'Gestante_grupo',
                            'Vivienda',
                            'updated_at',
                            'created_at',
                        ];
}
