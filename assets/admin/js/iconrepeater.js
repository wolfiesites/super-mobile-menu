jQuery(document).ready(function($){ 
	var self;
	var input = $('.icon-row').find('input');
	var addIcon = $('.iconrepeater .plus');
	var minusIcon = $('.iconrepeater .minus');

	function create_iconpicker_first( el ) {
		el.each(function(){
			var t = $(this);
			var iconsArray = [];
			var fontAwesomeArray = JSON.parse(smm_vars.fontAwesomeArray);
			var social_icons_array = ['fa-facebook', 'fa-facebook-square', 'fa-facebook-official', 'fa-twitter', 'fa-twitter-square', 'fa-instagram', 'fa-youtube-play', 'fa-youtube', 'fa-youtube-square', 'fa-linkedin-square', 'fa-linkedin'];
			if(t.hasClass('social')) {
				iconsArray = social_icons_array;
			} else {
				iconsArray = fontAwesomeArray;
			}
			t.fontIconPicker({
				source:  iconsArray,
				emptyIcon: false,
				hasSearch: true
			});
			t.addClass('icon-created');
		});
	}


	function destroy_iconpicker(el){
		el.prev('.icons-selector').remove();
	}

	function makeJson(){
		if( typeof self === 'undefined' ) {
			var repeater = $(this).closest('.iconrepeater');
		} else {
			var repeater = self;
		}

		var jsoninput = repeater.find('.jsoninput');
		var iconWrapper = repeater.find('.input-wrappers');
		var link = repeater.find('.linkinput');
		var icon = repeater.find('.iconinput');

		icons = [];
		iconWrapper.each(function(index, el){
			var link = $(this).find('.linkinput').val();
			var iconFa = $(this).find('.iconinput').val();
			var icon = {};
			icon['icon'] = iconFa;
			icon['link'] = link;
			icons.push(icon);
		});
		iconsString = JSON.stringify(icons);
		jsoninput.text(iconsString);
	}
	function create_iconpicker(el) {
		el.each(function(){
			var t = $(this);
			if(t.hasClass('icon-created')) {

			} else if (t.hasClass('social')){
				var social_icons_array = ['fa-facebook', 'fa-facebook-square', 'fa-facebook-official', 'fa-twitter', 'fa-twitter-square', 'fa-instagram', 'fa-youtube-play', 'fa-youtube', 'fa-youtube-square', 'fa-linkedin-square', 'fa-linkedin'];
				t.fontIconPicker({
					source:  social_icons_array,
					emptyIcon: false,
					hasSearch: true
				});	
				t.addClass('icon-created');
			} else {
				var social_icons_array = ['fa-facebook', 'fa-facebook-square', 'fa-facebook-official', 'fa-twitter', 'fa-twitter-square', 'fa-instagram', 'fa-youtube-play', 'fa-youtube', 'fa-youtube-square', 'fa-linkedin-square', 'fa-linkedin'];
				t.fontIconPicker({
					source:  JSON.parse(smm_vars.fontAwesomeArray),
					emptyIcon: false,
					hasSearch: true
				});	
				t.addClass('icon-created');
			}
		});
	}
	function addIconRow(){
		console.log('cloned!');
		self = $(this).closest('.iconrepeater');
		var elementCloned = $(this).closest('.icon-row').clone().insertAfter($(this).closest('.icon-row'));
		var inputWrapper = elementCloned.find('.input-wrappers');
		var thisIconPicker = elementCloned.find('.iconpicker');
		var onlyIconIpnut = thisIconPicker.removeClass('icon-created').off().removeAttr('style').detach();
		var thisIcon = elementCloned.find('.icons-selector').remove();
		inputWrapper.prepend(onlyIconIpnut);
		create_iconpicker(onlyIconIpnut);
		makeJson();
	}
	function removeIconRow(){
		self = $(this).closest('.iconrepeater');
		$(this).closest('.icon-row').remove();
		makeJson();
	}
	$('body').off().on('click', '.iconrepeater .plus', addIconRow);
	$('body').on('click', '.iconrepeater .minus', removeIconRow);
	$('body').on('keyup', '.icon-row input', makeJson);
	create_iconpicker_first($('.iconpicker'));
});