$(document).ready(function(){

	$('#left input,textarea').each(function(){

		$(this).bind('blur keypress', function() {

			if($(this).attr('id') == 'img') $('#new_img').attr('src',$(this).val());
			else $('#new_' + $(this).attr('id')).text($(this).val());

		});
	});
});