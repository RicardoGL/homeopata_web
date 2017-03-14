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

            'cellphone.required' => 'Proporciona un Teléfono celular.',
            'cellphone.regex' => 'Tu numero celular debe tener 10 digitos(solo números)',

            'history.required' => 'Proporciona un historial clinico del paciente.',

            'city.required' => 'Proporciona una ciudad',
            'city.min' => 'Proporciona el codigo de tu Ciudad mínimo 2 caracteres.'
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
            'history' =>   'required',
            'city' => 'required|min:2'
        ];
    }
}
