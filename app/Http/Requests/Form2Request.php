<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Form2Request extends FormRequest
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
            'ense_pre1' => 'required',
            'ense_pre2' => 'required',
            'ense_pre3' => 'required',
            'ense_pre4' => 'required',
            'ense_pre5' => 'required',
            'ense_pre6' => 'required',
            'ense_pre7' => 'required',
            'ense_pre8' => 'required',
            'ense_pre9' => 'required',
            'ense_pre10' => 'required',
            'ense_pre11' => 'required',
            'ense_pre12' => 'required',
            'ense_pre13' => 'required',
            'ense_pre14' => 'required',
            'ense_pre15' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'region_id.required' => 'Región es requerido',
            'provincia_id.required' => 'Provincia es requerido',
            'distrito_id.required' => 'Distrito es requerido',
            'ugel_id.required' => 'UGEL es requerido',
            'iedu_id.required' => 'Insitución educativa es requerido',
            'carac_id.required' => 'Caracteristica es requerido',
            'grado_id.required' => 'Grado es requerido',
            'seccion_id.required' => 'Sección es requerido',
            'turno_id.required' => 'Turno es requerido',
            'fecha.required' => 'Fecha es requerido',
            'nroVisita.required' => 'Número de visita es requerido',
            'hrInicio.required' => 'Hora de incio es requerido',
            'hrFin.required' => 'Hora de finalización es requerido',
            'name.required' => 'Nombre es requerido',
            'last_name.required' => 'Apellidos es requerido',
            'nro_dni.required' => 'DNI es requerido',
            'tipoPro_id.required' => 'Tipo de profesional es requerido',
            'ense_pre1.required' => 'Valoración de "Pregunta 1" es requerida',
            'ense_pre2.required' => 'Valoración de "Pregunta 2" es requerida',
            'ense_pre3.required' => 'Valoración de "Pregunta 3" es requerida',
            'ense_pre4.required' => 'Valoración de "Pregunta 4" es requerida',
            'ense_pre5.required' => 'Valoración de "Pregunta 5" es requerida',
            'ense_pre6.required' => 'Valoración de "Pregunta 6" es requerida',
            'ense_pre7.required' => 'Valoración de "Pregunta 7" es requerida',
            'ense_pre8.required' => 'Valoración de "Pregunta 8" es requerida',
            'ense_pre9.required' => 'Valoración de "Pregunta 9" es requerida',
            'ense_pre10.required' => 'Valoración de "Pregunta 10" es requerida',
            'ense_pre11.required' => 'Valoración de "Pregunta 11" es requerida',
            'ense_pre12.required' => 'Valoración de "Pregunta 12" es requerida',
            'ense_pre13.required' => 'Valoración de "Pregunta 13" es requerida',
            'ense_pre14.required' => 'Valoración de "Pregunta 14" es requerida',
            'ense_pre15.required' => 'Valoración de "Pregunta 15" es requerida'
        ];
    }
}
