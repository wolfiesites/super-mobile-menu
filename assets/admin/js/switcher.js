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

	function add_social_item(e){
		e.preventDefault();
		var t = $(this);
		var wrapper = t.closest('.conditional-wrapper');
		var items = wrapper.children('.social');
		var currentItem = t.closest('.social');
		var index = items.index(currentItem);
		var allItemsCount = items.length;
		var followingItems = currentItem.nextAll();
		var item = `
		<div class="social d-flex">
		<div class="input-wrappers">
		<input class="iconpicker-social" type="text" name="super_mobile_settings[social][socials][`+ (index + 1) +`][icon]" value="fa-facebook">
		<input type="text" name="super_mobile_settings[social][socials][`+ (index + 1) +`][link]" value="facebook.pl">
		</div>
		<div class="actions">
		<i class="fa fa-minus-circle minus" aria-hidden="true"></i>
		<i class="fa fa-plus-circle plus" aria-hidden="true"></i>
		</div>
		</div>`;
		currentItem.after(item);
		var el = wrapper.find('.iconpicker-social');
		// create_social_iconpicker($('.iconpicker-social'));
		var newFollowingItems = [];
		followingItems.each(function(item){
			$(this).find('.iconpicker').removeClass('icon-created').removeAttr('style').prev().remove();
			var str = $(this).prop("outerHTML");

			var newItem = str.replace(/\[([0-9*])\]/g, function(match, number){
				var num = match.substring(
					match.lastIndexOf("[") + 1, 
					match.lastIndexOf("]")
					);

				var index = parseInt(num) + 1;

				return '['+index+']';
			});
			newFollowingItems.push(newItem);

		});
		followingItems.remove();
		var elements = newFollowingItems.join('');
		currentItem.next().after(elements);
		create_social_iconpicker($('.iconpicker-social'));
	}

	function remove_social_item(e){
		e.preventDefault();
		var t = $(this);
		var wrapper = t.closest('.conditional-wrapper');
		var items = wrapper.children('.social');
		var currentItem = t.closest('.social');
		var index = items.index(currentItem);
		var allItemsCount = items.length;
		var followingItems = currentItem.nextAll();
		currentItem.remove();
	}




	function create_iconpicker( el ) {
		var fontAwesomeArray = JSON.parse(smm_vars.fontAwesomeArray);
		el.fontIconPicker({
			source:  fontAwesomeArray,
			emptyIcon: false,
			hasSearch: true
		});
	}

	function create_social_iconpicker(el) {
		el.each(function(){
			var t = $(this)
		if(t.hasClass('icon-created')) {
			
		} else {
			var social_icons_array = ['fa-facebook', 'fa-facebook-square', 'fa-facebook-official', 'fa-twitter', 'fa-twitter-square', 'fa-instagram', 'fa-youtube-play', 'fa-youtube', 'fa-youtube-square', 'fa-linkedin-square', 'fa-linkedin'];
			t.fontIconPicker({
				source:  social_icons_array,
				emptyIcon: false,
				hasSearch: true
			});	
			t.addClass('icon-created');
		}
		});
	}

	function destroy_iconpicker(el){
		el.prev('.icons-selector').remove();
	}
	create_iconpicker($('.iconpicker'));

	create_social_iconpicker($('.iconpicker-social'));

	$('body').on('click', '.social .minus', remove_social_item);

	$('body').off('click', '.social .plus').on('click', '.social .plus', add_social_item);

});