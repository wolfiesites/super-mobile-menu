jQuery(document).ready(function($){ 

	var wrapper = $('.smm-container');
	var sections = $('.smm-main-options tbody.section');
	var tabs = $('.smm-sidebar li.smm-tab');

	tabs.on('click' , function(e){
		e.preventDefault();
		tabs.removeClass('active');
		$(this).addClass('active');
		var target = $(this).data('target');
		var id = $('#' + target);
		sections.removeClass('active');
		id.addClass('active');
	});

});