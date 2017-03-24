$(document).ready(function() {
    $('#summernote').summernote({
	  height: 400,                 // set editor height
	  minHeight: null,             // set minimum height of editor
	  maxHeight: null,             // set maximum height of editor
	  focus: true                  // set focus to editable area after initializing summernote
	});
	$('#refreshPlantilla').on('click', function(){
		$('#summernote').summernote('disable');
		$('#summernote').summernote('enable');
	});
});