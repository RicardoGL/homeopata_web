<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreatePatientRequest;
use App\Patient;


class DoctorController extends Controller
{
    public function index(){

        return view('doctor.login-step-1');

    }

    public function autenticate(){

        return view('doctor.login-step-2');

    }

    public function register(){

        return view('doctor.register');
    }

    public function createPatient(CreatePatientRequest $request){


        $patient = new Patient();
        $patient->name = $request->name;
        $patient->lastname = $request->lastname;
        $patient->birthday = $request->birthday;
        $patient->cell_phone = $request->cellphone;
        $patient->history = $request->history;
        $patient->city = $request->city;
        $patient->to_buy = 1;
        $patient->save();

        return redirect('/user/patients');

    }

    public function patients($id = null){

        return view('doctor.patients');
    }
}
