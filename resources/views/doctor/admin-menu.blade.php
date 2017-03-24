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
						<p>Perfil de usuario por empezar</p>
					</div>

					<button id="btn-admin">GUARDAR Y ACTUALIZAR</button>

				</div>
            </div>
        </div>
    </section>

@endsection