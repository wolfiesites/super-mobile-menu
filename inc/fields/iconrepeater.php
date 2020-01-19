<?php
if($superoption['type'] == 'iconrepeater') {
	$icons = [ 
		[
			'icon' => 'fa-facebook',
			'link' => 'facebook.pl'
		], 
		[
			'icon' => 'fa-instagram',
			'link' => 'instagram.pl'
		] 
	];
	$json = json_encode($icons);

	?>
	<tr valign="top">
		<th scope="row"> <?php echo  $superoption['label'] ?></th>
		<td>
			<div class="smm-option-wrapper">
				<div class="iconrepeater">
					<?php $just_name = get_between($superoption['name'], "[", "]"); ?>

					<textarea class="jsoninput" name='<?php echo $superoption['name'] ?>' rows="10" style='width:100%;'>
						<?php echo $json ?>
					</textarea>
					<?php
					$name = $superoption['name'];
					$value =  $super_mobile_menu_settings[$just_name];
					$value = json_decode($value);
					$count = 0;
					if(!empty( $value )) {
						foreach ($value as $icons => $icon ) { ?>
							<div class="icon-row">
								<div class="input-wrappers">
									<input type="text" class="iconpicker-social iconinput" value="<?php echo $icon->icon ?>">
									<input type="text" class="linkinput" value="<?php echo $icon->link ?>">
								</div><!-- /input-wrappers -->

								<div class="actions">
									<i class="fa fa-minus-circle minus" aria-hidden="true"></i>
									<i class="fa fa-plus-circle plus" aria-hidden="true"></i>
								</div><!-- /actions -->
							</div><!-- /icon-row -->

							<?php 
						}
						$count++;
					} else { ?>
						<div class="icon-row">
							<div class="input-wrappers">
								<input type="text" class="iconpicker-social iconinput">
								<input type="text" class="linkinput">
							</div><!-- /input-wrappers -->

							<div class="actions">
								<i class="fa fa-minus-circle minus" aria-hidden="true"></i>
								<i class="fa fa-plus-circle plus" aria-hidden="true"></i>
							</div><!-- /actions -->
						</div><!-- /icon-row -->
					<?php } ?>
				</div><!-- /iconrepeater -->
			</div>
		</td>	
	</tr>
	<script type="text/javascript">
		jQuery(document).ready(function($){ 
			var self;
			var input = $('.icon-row').find('input');
			var addIcon = $('.iconrepeater .plus');
			var minusIcon = $('.iconrepeater .minus');
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
			function create_social_iconpicker(el) {
				el.each(function(){
					var t = $(this);
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
			function addIconRow(){
				self = $(this).closest('.iconrepeater');
				var elementCloned = $(this).closest('.icon-row').clone().insertAfter($(this).closest('.icon-row'));
				var inputWrapper = elementCloned.find('.input-wrappers');
				var thisIconPicker = elementCloned.find('.iconpicker-social');
				var onlyIconIpnut = thisIconPicker.removeClass('icon-created').off().removeAttr('style').detach();
				var thisIcon = elementCloned.find('.icons-selector').remove();
				inputWrapper.prepend(onlyIconIpnut);
				create_social_iconpicker(onlyIconIpnut);
				makeJson();
			}
			function removeIconRow(){
				self = $(this).closest('.iconrepeater');
				$(this).closest('.icon-row').remove();
				makeJson();
			}
			$('body').on('click', '.iconrepeater .plus', addIconRow);
			$('body').on('click', '.iconrepeater .minus', removeIconRow);
			$('body').on('keyup', '.icon-row input', makeJson);
		});
	</script>
	<?php
} 