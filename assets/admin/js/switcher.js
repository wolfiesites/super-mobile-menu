jQuery(document).ready(function($){ 
	$('body .checkbox').on('click', '.switch', function(e){
		e.preventDefault();
		if( $(this).hasClass( 'active' ) ) {
			$(this).removeClass('active');
			$(this).find('input').removeAttr( 'checked' );
		} else {
			$(this).addClass('active');
			$(this).find('input').attr('checked', true);
		}
	});
	$('body .conditional').on('click', '.switch', function(e){
		e.preventDefault();
		if( $(this).hasClass( 'active' ) ) {
			$(this).removeAttr('class');
			$(this).attr('class', 'switch');
			$(this).find('input').removeAttr( 'checked' );
			$(this).closest('.conditional').find('.conditional-wrapper').slideUp().addClass('hide');
		} else {
			$(this).attr('class', 'switch active');
			$(this).find('input').attr('checked', true);
			$(this).closest('.conditional').find('.conditional-wrapper').slideDown().attr('class','conditional-wrapper');
		}
	});

});