<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreatePatientRequest;

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

    public function CreatePatient(CreatePatientRequest $request){

        dd($request->all());

    }
}
