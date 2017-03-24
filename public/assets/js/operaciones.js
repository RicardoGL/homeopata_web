
function menu(){
	$('.boxAdmin').html('<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">' +
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
	$('.boxAdmin').html('<p>Perfil de usuario por empezar</p>');
}
