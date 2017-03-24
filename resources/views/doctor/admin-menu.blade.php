@extends('layouts.doctorAdmin')
@section('content')

	<section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="bgGrey">
                    	<h3>Panel de administración</h3>
	                    <p onclick="perfil();"><i class="fa fa-cog" aria-hidden="true"></i> Editar perfil</p>
	                    <p onclick="plantillas();" id="refreshPlantilla"><i class="fa fa-cog" aria-hidden="true"></i> Plantillas recetas</p>
	                    <p onclick="menu();"><i class="fa fa-cog" aria-hidden="true"></i> Menú</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="bgGrey boxAdmin">
						<p>Perfil de usuario</p>
                        <div class="row boxLeftPerfil">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <center><img src="{!! asset('assets/images/perfil.jpg') !!}" alt="perfil" width="80%"></center>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <ul>
                                    <li>Nombre: Willie</li>
                                    <li>Apellidos: Smith Smith</li>
                                    <li>Edad: 45 años</li>
                                    <li>Tipo sangre: - O</li>
                                    <li>Alergias: Paracetamol</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row boxRightPerfil">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                        </div>
					</div>

					<button id="btn-admin">GUARDAR Y ACTUALIZAR</button>

				</div>
            </div>
        </div>
    </section>

@endsection