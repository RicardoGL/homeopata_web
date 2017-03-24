
function menu(){
	$('.boxAdmin').html(
						'<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">' +
							'<div class="panel panel-default">' +
								'<div class="panel-heading" role="tab" id="headingCero">' +
									'<h4 class="panel-title">' +
										'<a id="addCategory">+ Añadir Categoría<a>' +
									'</h4>' +
								'</div>' +
							'</div>' +
						'</div>'
						);

	var i = 0;
	
	$('#addCategory').click(function(){

	i = i + 1;

			//add atributes
			$('.collapsed').attr('href', '#collapse' + i);
			$('.panel-collapse').attr('id', 'collapse' + i);

			//add category
			$('.panel-default ').last().after('<div class="panel panel-default">' + 
											  '<div class="panel-heading" role="tab" id="headingFour">' +
											  	'<h4 class="panel-title">' +
											 	 '<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseReplace" aria-expanded="false" aria-controls="collapseFour">' +
											  		'Categoría' + ' ' +  i +
											  	 '</a>' +
											  	'</h4>' +
											  '</div>' +
											  '<div id="collapseReplace" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">' +
											  	'<div class="panel-body">' +
											 		'<p>subcategoría</p>' +
											  		'<p class="addSubcategory">+ Añadir</p>' +
											 	'</div>' +
											  '</div>' +
										  '</div>');

			//add subcategory
			$('.addSubcategory').click(function(){
		      $(this).before('<p>nueva subcategoría</p>');
		    });
	});

}

function plantillas(){
	var header = "/assets/images/logoNav.png";
	var footer = "/assets/images/line.png";
	$('.boxAdmin').html(
						'<p>Editor de recetas</p>' +
						'<div id="summernote">' +
							'<div class="row">' +
								'<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 boxleftReceta">' +
									'<img src="'+header+'" alt="logoNav" width="150px">' +
									'<p><em>Dr. Alfredo Sánchez Gaitán</em></p>' +
								'</div>' +
								'<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 boxRightReceta">' +
									'<p>Diego Nava Arámburu</p>' +
									'<p>03/06/85 Nava</p>' +
								'</div>' +
							'</div>' +
							'<div class="row">' +
								'<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contentReceta">' +
									'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut dolores nobis cupiditate, rem. Sit nesciunt error cupiditate deleniti. Unde nostrum, quos cum! Beatae ducimus error consequuntur laborum in. Quasi, vitae.</p>' +
									'<br><br>' +
									'<p style="float: right;">Total: $1,500</p>' +
								'</div>' +
								'<center>' +
									'<img src="'+footer+'" alt="logoNav" width="80%">' +
								'</center>' +
							'</div>' +
							'<div class="row">' +
								'<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 footerReceta">' +
									'<p>' +
										'Tel. 5566-1166 <br>' +
										'CONSULTA PREVIA CITA' +
									'</p>' +
								'</div>' +
								'<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 footerReceta">' +
									'<p>Berlín No. 19 BIS Col. Juárez México, 066DO CDMX</p>' +
								'</div>' +
								'<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 footerReceta">' +
									'<i class="fa fa-facebook" aria-hidden="true"></i>' +
									'<i class="fa fa-twitter" aria-hidden="true"></i>' +
									'<a href="mailto:gaitan@homeopata.com.mx"><i class="fa fa-envelope" aria-hidden="true"></i> gaitan@homeopata.com.mx</a>' +
								'</div>' +
							'</div>' +
						'</div>'
						);
}

function perfil(){
	var imgPerfil = "/assets/images/perfil.jpg";
	$('.boxAdmin').html(
						'<p>Perfil de usuario</p>' +
                        '<div class="row boxLeftPerfil">' +
                            '<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">' +
                                '<center><img src="'+imgPerfil+'" alt="perfil" width="80%"></center>' +
                            '</div>' +
                            '<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">' +
                                '<ul>' +
                                    '<li>Nombre: Willie</li>' +
                                    '<li>Apellidos: Smith Smith</li>' +
                                    '<li>Edad: 45 años</li>' +
                                    '<li>Tipo sangre: - O</li>' +
                                    '<li>Alergias: Paracetamol</li>' +
                                '</ul>' +
                            '</div>' +
                        '</div>' +
                        '<div class="row boxRightPerfil">' +
                            '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">' +
                                '<p>' +
                                    'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod' +
                                    'tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,' +
                                    'quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo' +
                                    'consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse' +
                                    'cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non' +
                                    'proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' +
                                '</p>' +
                            '</div>' +
                        '</div>'
						);
}
