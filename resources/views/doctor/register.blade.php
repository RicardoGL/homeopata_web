@extends('layouts.doctor')
@section('content')
    <style>
        #patient label{
            color:#000000;
            float:left;
            width:100%;
        }
        #patient button{
            float:left;
            width:50%;
            margin-top:20px;
            margin-bottom:20px;
        }
    </style>
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="row">
                <div class="col-sm-12">
                    <div>
                        <h2>Registro nuevo paciente</h2>
                    </div>
                    <div>
                        @include('partials.messages')
                    </div>
                </div>
            </div>
            <form action="/user/register" method="post" id="patient">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name">
                    {{  csrf_field() }}
                </div>
                <div class="form-group">
                    <label for="lastname">Apellido</label>
                    <input type="text" name="lastname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="birthday">Fecha de nacimiento</label>
                    <input type="date" name="birthday"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="cell_phone">Celular</label>
                    <input type="text" name="cellphone"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="history">Historial clinico</label>
                    <textarea name="history" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection