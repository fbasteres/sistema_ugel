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
}
