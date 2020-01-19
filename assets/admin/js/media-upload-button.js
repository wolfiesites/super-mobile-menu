jQuery(document).ready(function($){ 
/*
	 * Select/Upload image(s) event
	 */
	$('body').on('click', '.smm-image-picker', function(e){
		e.preventDefault();
 
    		var button = $(this),
    		    custom_uploader = wp.media({
			title: 'Insert image',
			library : {
				// uncomment the next line if you want to attach image to the current post
				// uploadedTo : wp.media.view.settings.post.id, 
				type : 'image'
			},
			button: {
				text: 'Use this image' // button label text
			},
			multiple: false // for multiple image selection set to true
		}).on('select', function() { // it also has "open" and "close" events 
			var attachment = custom_uploader.state().get('selection').first().toJSON();
			$(button).next().next().next().html('<img class="true_pre_image" src="' + attachment.url + '" style="max-width:100px;display:block;" />');
			$(button).next().next().val(attachment.id);
			/* if you sen multiple to true, here is some code for getting the image IDs
			var attachments = frame.state().get('selection'),
			    attachment_ids = new Array(),
			    i = 0;
			attachments.each(function(attachment) {
 				attachment_ids[i] = attachment['id'];
				console.log( attachment );
				i++;
			});
			*/
		})
		.open();
	});
 
	/*
	 * Remove image event
	 */
	$('body').on('click', '.smm-image-remove', function(){
		$(this).hide().parent().find('input').val('');
		$(this).parent().find('img').remove();
		return false;
	});

});