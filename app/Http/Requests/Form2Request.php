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
            'region_id.required' => 'Campo Departamento es requerido',
            'provincia_id.required' => 'Campo Provincia es requerido',
            'distrito_id.required' => 'Campo Distrito es requerido',
            'ugel_id.required' => 'Campo Ugel es requerido',
            'iedu_id.required' => 'Campo Insitución educativa es requerido',
            'carac_id.required' => 'Campo caracteristica es requerido',
            'grado_id.required' => 'Campo grado es requerido',
            'seccion_id.required' => 'Campo sección es requerido',
            'turno_id.required' => 'Campo turno es requerido',
            'fecha.required' => 'Campo fecha es requerido',
            'nroVisita.required' => 'Campo número de visita es requerido',
            'hrInicio.required' => 'Campo hora de incio es requerido',
            'hrFin.required' => 'Campo hora de finalización es requerido',
            'name.required' => 'Campo nombre es requerido',
            'last_name.required' => 'Campo apellidos es requerido',
            'nro_dni.required' => 'Campo DNI es requerido',
            'tipoPro_id.required' => 'Campo tipo de profesional es requerido',
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
