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

					<!-- <input class='getdata' type='text' name='<?php echo $superoption['name'] ?>' value='<?php echo $json ?>'> -->

					<!-- <input class="getdata" type="text" name="<?php echo $superoption['name'] ?>" value="<?php echo $super_mobile_menu_settings[$just_name] ?>"> -->
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
					<button class="createjson">Create Json</button>
				</div><!-- /iconrepeater -->
			</div>
		</td>	
	</tr>
	<script type="text/javascript">
		jQuery(document).ready(function($){ 
			var submit = $('.iconrepeater').find('.createjson');
			var input = $('.icon-row').find('input');
			function makeJson(){
				var repeater = $(this).closest('.iconrepeater');
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
			input.on('keyup', makeJson);
			submit.click(function(e){e.preventDefault();})
			submit.click(makeJson);
		});
	</script>
	<?php
} 