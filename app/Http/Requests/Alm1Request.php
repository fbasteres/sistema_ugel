<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Alm1Request extends FormRequest
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
            'es_lastname' => 'required',
            'es_name' => 'required',
            'dr_lastname' => 'required',
            'dr_name' => 'required',
            'dr_telf' => 'required',
            'doc_lastname' => 'required',
            'doc_name' => 'required',
            'doc_telf' => 'required',
            'estd_ma' => 'required',
            'estd_as' => 'required',
            'estd_tr' => 'required',
            'grado_id' => 'required',
            'seccion_id' => 'required',
            'turno_id' => 'required',
            'fecha' => 'required',
            'hrInicio' => 'required',
            'hrFin' => 'required',
            'rmaed_pre1' => 'required|boolean:0,1,true,false',
            'rmaed_pre2' => 'required|boolean:0,1,true,false',
            'rmaed_pre3' => 'required|boolean:0,1,true,false',
            'rmaed_pre4' => 'required|boolean:0,1,true,false',
            'rmaed_pre5' => 'required|boolean:0,1,true,false',
            'rmaed_pre6' => 'required|boolean:0,1,true,false',
            'rmaed_pre7' => 'required|boolean:0,1,true,false',
            'rmaed_pre8' => 'required|boolean:0,1,true,false',
            'rmaed_pre9' => 'required|boolean:0,1,true,false',
            'rmaed_pre10' => 'required|boolean:0,1,true,false',
            'rmaed_pre11' => 'required|boolean:0,1,true,false',
            'rmaed_pre12' => 'required|boolean:0,1,true,false',
            'rmaed_pre13' => 'required|boolean:0,1,true,false',
            'rmaed_pre14' => 'required|boolean:0,1,true,false',
            'rmaed_pre15' => 'required|boolean:0,1,true,false',
            'rmaed_pre16' => 'required|boolean:0,1,true,false',
            'rmaed_pre17' => 'required|boolean:0,1,true,false',
            'rmaed_pre18' => 'required|boolean:0,1,true,false',
            'rmaed_pre19' => 'required|boolean:0,1,true,false',
            'rmaed_pre20' => 'required|boolean:0,1,true,false',
            'rmaed_pre21' => 'required|boolean:0,1,true,false',
            'apr_pre1' => 'required|boolean:0,1,true,false',
            'apr_pre2' => 'required|boolean:0,1,true,false',
            'apr_pre3' => 'required|boolean:0,1,true,false',
            'ase_pre1' => 'required|boolean:0,1,true,false',
            'ase_pre2' => 'required|boolean:0,1,true,false',
            'ase_pre3' => 'required|boolean:0,1,true,false',
            'ase_pre4' => 'required|boolean:0,1,true,false',
            'ase_pre5' => 'required|boolean:0,1,true,false',
            'ase_pre6' => 'required|boolean:0,1,true,false'
        ];
    }

    public function messages()
    {
        return [
            'region_id.required' => 'Región es requerido',
            'provincia_id.required' => 'Provincia es requerido',
            'distrito_id.required' => 'Distrito es requerido',
            'ugel_id.required' => 'UGEL es requerido',
            'iedu_id.required' => 'Institución Educativa es requerido',
            'es_lastname.required' => 'Apellidos de especialista es requerido',
            'es_name.required' => 'Nombres de especialista es requerido',
            'dr_lastname.required' => 'Apellidos de Director es requerido',
            'dr_name.required' => 'Nombre de Director es requerido',
            'dr_telf.required' => 'Número de telefono de Director es requerido',
            'doc_lastname.required' => 'Apellidos de docente es requerido',
            'doc_name.required' => 'Nombre del docente es requerido',
            'doc_telf.required' => 'Número de telefono del docente es requerido',
            'estd_ma.required' => 'Cantidad de estudiantes matriculados es requerido',
            'estd_as.required' => 'Cantidad de estudiantes asistentes es requerido',
            'estd_tr.required' => 'Cantidad de estudiantes trasladados es requerido',
            'grado_id.required' => 'Grado es requerido',
            'seccion_id.required' => 'Sección es requerido',
            'turno_id.required' => 'Turno es requerido',
            'fecha.required' => 'Fecha es requerido',
            'hrInicio.required' => 'Hora de inicio es requerido',
            'hrFin.required' => 'Hora de Fin es requerido',
            'rmaed_pre1.required' => 'Recepción y distribución de materiales educativos "pregunta 1" es requerido',
            'rmaed_pre2.required' => 'Recepción y distribución de materiales educativos "pregunta 2" es requerido',
            'rmaed_pre3.required' => 'Recepción y distribución de materiales educativos "pregunta 3" es requerido',
            'rmaed_pre4.required' => 'Recepción y distribución de materiales educativos "pregunta 4" es requerido',
            'rmaed_pre5.required' => 'Recepción y distribución de materiales educativos "pregunta 5" es requerido',
            'rmaed_pre6.required' => 'Recepción y distribución de materiales educativos "pregunta 6" es requerido',
            'rmaed_pre7.required' => 'Recepción y distribución de materiales educativos "pregunta 7" es requerido',
            'rmaed_pre8.required' => 'Recepción y distribución de materiales educativos "pregunta 8" es requerido',
            'rmaed_pre9.required' => 'Recepción y distribución de materiales educativos "pregunta 9" es requerido',
            'rmaed_pre10.required' => 'Recepción y distribución de materiales educativos "pregunta 10" es requerido',
            'rmaed_pre11.required' => 'Recepción y distribución de materiales educativos "pregunta 11" es requerido',
            'rmaed_pre12.required' => 'Recepción y distribución de materiales educativos "pregunta 12" es requerido',
            'rmaed_pre13.required' => 'Recepción y distribución de materiales educativos "pregunta 13" es requerido',
            'rmaed_pre14.required' => 'Recepción y distribución de materiales educativos "pregunta 14" es requerido',
            'rmaed_pre15.required' => 'Recepción y distribución de materiales educativos "pregunta 15" es requerido',
            'rmaed_pre16.required' => 'Recepción y distribución de materiales educativos "pregunta 16" es requerido',
            'rmaed_pre17.required' => 'Recepción y distribución de materiales educativos "pregunta 17" es requerido',
            'rmaed_pre18.required' => 'Recepción y distribución de materiales educativos "pregunta 18" es requerido',
            'rmaed_pre19.required' => 'Recepción y distribución de materiales educativos "pregunta 19" es requerido',
            'rmaed_pre20.required' => 'Recepción y distribución de materiales educativos "pregunta 20" es requerido',
            'rmaed_pre21.required' => 'Recepción y distribución de materiales educativos "pregunta 21" es requerido',
            'apr_pre1.required' => 'Análisis de las programaciones curriculares anuales y de unidad "pregunta 1" es requerido',
            'apr_pre2.required' => 'Análisis de las programaciones curriculares anuales y de unidad "pregunta 2" es requerido',
            'apr_pre3.required' => 'Análisis de las programaciones curriculares anuales y de unidad "pregunta 3" es requerido',
            'ase_pre1.required' => 'Análisis de las sesiones de aprendizaje "pregunta 1" es requerido',
            'ase_pre2.required' => 'Análisis de las sesiones de aprendizaje "pregunta 2" es requerido',
            'ase_pre3.required' => 'Análisis de las sesiones de aprendizaje "pregunta 3" es requerido',
            'ase_pre4.required' => 'Análisis de las sesiones de aprendizaje "pregunta 4" es requerido',
            'ase_pre5.required' => 'Análisis de las sesiones de aprendizaje "pregunta 5" es requerido',
            'ase_pre6.required' => 'Análisis de las sesiones de aprendizaje "pregunta 6" es requerido'
        ];
    }
}
