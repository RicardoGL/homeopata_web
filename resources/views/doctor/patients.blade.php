@extends('layouts.doctor')
@section('content')
    <style>
        .p-30{
            padding-top:30px;
            padding-bottom:30px;
        }
        .p-15{
            padding-top:15px;
            padding-bottom:15px;
        }
        .rounded-zero{
            border-radius:0px;
        }
        .gray{
            background-color:#E3E3E3;
            height: 45px;
            max-height:100%;
        }
        .btn-date{
            background-color:#C9C9C9;
        }
        .unformat{
            margin-top:0px;
            color:#000000;
        }
        .unformat label{
            display:inline-block;
            background-color:#E3E3E3;
            color:#000000;
            float:none;
            height:30px;
            padding-top: 7px;

        }
        .unformat input{
            color:#000000;
            background-color:#C9C9C9;
            height:30px;
            border:none;
        }
        .head-table{
            background-color:#585858;
            color:#ffffff;
        }
        .pagination.head-table li>a{
            background-color:#585858!important;
            color:#ffffff;
            border-radius:0px;
            transition:all 0.5s ease;
        }
        .pagination.head-table li>a:hover{
            background-color:#C9C9C9!important;
        }
        tbody>tr:nth-child(2n+1){
            background:#C9C9C9!important;
        }
        .pencil{
            padding-left:20px;
            cursor:pointer;
        }
        .title-modal{
            background:#7dc20f;
            color:#ffffff;
        }
        /* The switch - the box around the slider */
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        /* Hide default HTML checkbox */
        .switch input {display:none;}

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #7dc20f;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }
    </style>
    <div class="container p-30">
        <div class="row p-15">
            <div class="col-sm-8 col-sm-offset-4">
                <div>

                    <form action="" class="form-inline unformat gray">
                        <i class="fa fa-search fa-2x" aria-hidden="true"></i>
                        <div class="form-group">
                            <label for="">Por Apellido</label>
                            <input type="text">
                        </div>
                        <div class="btn-group">
                            <label for="">Por Fecha:</label>
                        </div>
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-date dropdown-toggle" type="button" data-toggle="dropdown">Día
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Lunes</a></li>
                                    <li><a href="#">Martes</a></li>
                                    <li><a href="#">Miercoles</a></li>
                                    <li><a href="#">Jueves</a></li>
                                    <li><a href="#">Viernes</a></li>
                                    <li><a href="#">Sabado</a></li>
                                    <li><a href="#">Domingo</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-date dropdown-toggle" type="button" data-toggle="dropdown">Mes
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Enero</a></li>
                                    <li><a href="#">Febrero</a></li>
                                    <li><a href="#">Marzo</a></li>
                                    <li><a href="#">Abril</a></li>
                                    <li><a href="#">Mayo</a></li>
                                    <li><a href="#">Junio</a></li>
                                    <li><a href="#">Julio</a></li>
                                    <li><a href="#">Agosto</a></li>
                                    <li><a href="#">Septiembre</a></li>
                                    <li><a href="#">Octubre</a></li>
                                    <li><a href="#">Noviembre</a></li>
                                    <li><a href="#">Diciembre</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-date dropdown-toggle" type="button" data-toggle="dropdown">Año
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    @for($x=1950; $x < 2017 ; $x++)
                                        <li><a href="#">{{ $x }}</a></li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button type="submit" class="btn rounded-zero">Buscar</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <table class="table table-responsive table-striped table-hover text-center">
                    <thead class="head-table text-center">
                    <tr>
                        <th class="text-center">Clave</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Fecha de ingreso</th>
                        <th class="text-center">Última visita</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>091090Garcia</td>
                        <td>Ricardo Garcia</td>
                        <td>14 de marzo 2017</td>
                        <td>14 de marzo 2017
                            <span class="glyphicon pencil glyphicon-pencil" data-toggle="modal" data-target=".editprofile"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>091090Garcia</td>
                        <td>Ricardo Garcia</td>
                        <td>14 de marzo 2017</td>
                        <td>14 de marzo 2017
                            <span class="glyphicon pencil glyphicon-pencil" data-toggle="modal" data-target=".editprofile"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>091090Garcia</td>
                        <td>Ricardo Garcia</td>
                        <td>14 de marzo 2017</td>
                        <td>14 de marzo 2017
                            <span class="glyphicon pencil glyphicon-pencil" data-toggle="modal" data-target=".editprofile"></span>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8 text-right">
                        <ul class="pagination head-table">
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li><a href="">5</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade editprofile" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header text-uppercase title-modal">Editar perfil</div>
                <div class="modal-body">
                    <p>Configura las preferencias de este usuario.</p>
                        <div class="form-group">
                            <label class="col-sm-8">Bloquear compra el línea</label>
                            <label class="switch">
                                <input type="checkbox">
                                <div class="slider"></div>
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-8">Bloquear usuario</label>
                            <label class="switch">
                                <input type="checkbox">
                                <div class="slider"></div>
                            </label>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.switch').on('click',function(){
            var input = $(this).find('input');
            if( input[0].checked  ){
                console.log("Esta activo");
            }else{
                console.log("Esta inactivo");
            }

        });
    </script>
@endsection