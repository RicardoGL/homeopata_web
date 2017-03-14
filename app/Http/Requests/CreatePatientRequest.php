<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreatePatientRequest extends Request
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

    public function messages(){
        return [
            'name.required' => 'Proporciona un nombre.',
            'lastname.required' => 'Proporciona un apellido.',

            'birthday.required' =>  'Proporciona una fecha de nacimiento.',
            'birthday.date_format' =>  'Proporciona un formato válido para la fecha YYYY-mm-dd',

            'cellphone.required' => 'phone se esta ejecutando el require.',
            'cellphone.numeric' => 'phone se esta ejecutando el numeric.',
            'cellphone.min' => 'phone se esta ejecutando el min',
            'cellphone.max' => 'phone se esta ejecutando el max',
            'cellphone.size' => 'phone se esta ejecutando el size',
            'cellphone.between' => 'phone se esta ejecutando el between',

            'history.required' => 'Proporciona un historial clinico del paciente.',
        ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //'birthday' =>  'required|date_format:Y-m-d',
        return [
            'name' => 'required',
            'lastname' =>  'required',
            'birthday' =>  'required',
            'cellphone' => 'required|regex:/[0-9]{10}/',
            'history' =>   'required'
        ];
    }
}
