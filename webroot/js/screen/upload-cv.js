$(document).on('change','.up', function(){
		   	var names = [];
		   	var length = $(this).get(0).files.length;
		   	$('.addedFile span').text($(this).get(0).files[0].name);
		   	$('.addedFile').show();
	   });