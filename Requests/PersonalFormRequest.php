<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonalFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           'Nombres'=>'required|max:30',
           'Apellido Paterno'=>'required|max:50',
           'Apellido Materno'=>'required|max:50',
            'Genero'=>'required|max:1',
            'Carnet de Identidad'=>'required',
            'Numero Celular'=>'required',
    }
}
