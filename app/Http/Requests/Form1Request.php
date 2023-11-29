<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Form1Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'region_id' => 'required',
            'provincia_id' => 'required',
            'distrito_id' => 'required',
            'ugel_id' => 'required',
            'iedu_id' => 'required',
            'carac_id' => 'required',
            'grado_id' => 'required',
            'seccion_id' => 'required',
            'turno_id' => 'required',
            'fecha' => 'required',
            'nroVisita' => 'required',
            'hrInicio' => 'required',
            'hrFin' => 'required',
            'name' => 'required',
            'last_name' => 'required',
            'nro_dni' => 'required',
            'tipoPro_id' => 'required',
            'vpa_pre1' => 'required|boolean:0,1,true,false',
            'vpa_pre2' => 'required|boolean:0,1,true,false',
            'vpa_pre3' => 'required|boolean:0,1,true,false',
            'vpa_pre4' => 'required|boolean:0,1,true,false',
            'vpa_pre5' => 'required|boolean:0,1,true,false',
            'vpa_pre6' => 'required|boolean:0,1,true,false',
            'vpa_pre7' => 'required|boolean:0,1,true,false',
            'vpa_pre8' => 'required|boolean:0,1,true,false',
            'vpa_pre9' => 'required|boolean:0,1,true,false',
            'vpa_pre10' => 'required|boolean:0,1,true,false',
            'vpa_pre11' => 'required|boolean:0,1,true,false',
            'vpa_pre12' => 'required|boolean:0,1,true,false',
            'vpa_pre13' => 'required|boolean:0,1,true,false',
            'vpa_pre14' => 'required|boolean:0,1,true,false',
            'vpa_pre15' => 'required|boolean:0,1,true,false',
            'vud_pre1' => 'required|boolean:0,1,true,false',
            'vud_pre2' => 'required|boolean:0,1,true,false',
            'vud_pre3' => 'required|boolean:0,1,true,false',
            'vud_pre4' => 'required|boolean:0,1,true,false',
            'vud_pre5' => 'required|boolean:0,1,true,false',
            'vud_pre6' => 'required|boolean:0,1,true,false',
            'vud_pre7' => 'required|boolean:0,1,true,false',
            'vud_pre8' => 'required|boolean:0,1,true,false',
            'vud_pre9' => 'required|boolean:0,1,true,false',
            'vud_pre10' => 'required|boolean:0,1,true,false',
            'vud_pre11' => 'required|boolean:0,1,true,false',
            'vud_pre12' => 'required|boolean:0,1,true,false',
            'vud_pre13' => 'required|boolean:0,1,true,false',
            'vud_pre14' => 'required|boolean:0,1,true,false',
            'vud_pre15' => 'required|boolean:0,1,true,false'
        ];
    }

    public function messages()
    {
        return [
            'region_id.required' => 'Region es requerido',
            'provincia_id.required' => 'Provincia es requerido',
            'distrito_id.required' => 'Distrito es requerido',
            'ugel_id.required' => 'UGEL es requerido',
            'iedu_id.required' => 'Institución educativa es requerido',
            'carac_id.required' => 'Caracteristica es requerido',
            'grado_id.required' => 'Grado es requerido',
            'seccion_id.required' => 'Sección es requerido',
            'turno_id.required' => 'Turno es requerido',
            'fecha.required' => 'Fecha es requerido',
            'nroVisita.required' => 'Número de visita es requerido',
            'hrInicio.required' => 'Hora de inicio es requerido',
            'hrFin.required' => 'Hora de fin es requerido',
            'name.required' => 'Nombres es requerido',
            'last_name.required' => 'Apellidos es requerido',
            'nro_dni' => 'Número de DNI es requerido',
            'tipoPro_id.required' => 'Tipo de profesional es requerido',
            'vpa_pre1.required' => 'Verificación de la planificación anual "Pregunta 1" es requerido',
            'vpa_pre2.required' => 'Verificación de la planificación anual "Pregunta 2" es requerido',
            'vpa_pre3.required' => 'Verificación de la planificación anual "Pregunta 3" es requerido',
            'vpa_pre4.required' => 'Verificación de la planificación anual "Pregunta 4" es requerido',
            'vpa_pre5.required' => 'Verificación de la planificación anual "Pregunta 5" es requerido',
            'vpa_pre6.required' => 'Verificación de la planificación anual "Pregunta 6" es requerido',
            'vpa_pre7.required' => 'Verificación de la planificación anual "Pregunta 7" es requerido',
            'vpa_pre8.required' => 'Verificación de la planificación anual "Pregunta 8" es requerido',
            'vpa_pre9.required' => 'Verificación de la planificación anual "Pregunta 9" es requerido',
            'vpa_pre10.required' => 'Verificación de la planificación anual "Pregunta 10" es requerido',
            'vpa_pre11.required' => 'Verificación de la planificación anual "Pregunta 11 es requerido',
            'vpa_pre12.required' => 'Verificación de la planificación anual "Pregunta 12" es requerido',
            'vpa_pre13.required' => 'Verificación de la planificación anual "Pregunta 13" es requerido',
            'vpa_pre14.required' => 'Verificación de la planificación anual "Pregunta 14" es requerido',
            'vpa_pre15.required' => 'Verificación de la planificación anual "Pregunta 15" es requerido',
            'vud_pre1.required' => 'Verificación de la unidad didáctica "Pregunta 1" es requerido',
            'vud_pre2.required' => 'Verificación de la unidad didáctica "Pregunta 2" es requerido',
            'vud_pre3.required' => 'Verificación de la unidad didáctica "Pregunta 3" es requerido',
            'vud_pre4.required' => 'Verificación de la unidad didáctica "Pregunta 4" es requerido',
            'vud_pre5.required' => 'Verificación de la unidad didáctica "Pregunta 5" es requerido',
            'vud_pre6.required' => 'Verificación de la unidad didáctica "Pregunta 6" es requerido',
            'vud_pre7.required' => 'Verificación de la unidad didáctica "Pregunta 7" es requerido',
            'vud_pre8.required' => 'Verificación de la unidad didáctica "Pregunta 8" es requerido',
            'vud_pre9.required' => 'Verificación de la unidad didáctica "Pregunta 9" es requerido',
            'vud_pre10.required' => 'Verificación de la unidad didáctica "Pregunta 10" es requerido',
            'vud_pre11.required' => 'Verificación de la unidad didáctica "Pregunta 11" es requerido',
            'vud_pre12.required' => 'Verificación de la unidad didáctica "Pregunta 12" es requerido',
            'vud_pre13.required' => 'Verificación de la unidad didáctica "Pregunta 13" es requerido',
            'vud_pre14.required' => 'Verificación de la unidad didáctica "Pregunta 14" es requerido',
            'vud_pre15.required' => 'Verificación de la unidad didáctica "Pregunta 15" es requerido'
        ];
        
    }
}
