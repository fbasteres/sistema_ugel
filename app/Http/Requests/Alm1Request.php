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
}
