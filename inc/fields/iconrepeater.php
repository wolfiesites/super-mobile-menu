<?php
if($superoption['type'] == 'iconrepeater') {
	$icons = [];
	$json = json_encode($icons);
	?>
	<tr valign="top">
		<th scope="row"> <?php echo  $superoption['label'] ?></th>
		<td>
			<div class="smm-option-wrapper">
				<div class="iconrepeater">
					<?php $just_name = get_between($superoption['name'], "[", "]"); ?>
					<textarea hidden class="jsoninput" name='<?php echo $superoption['name'] ?>' rows="10" style='width:100%;'>
						<?php echo $json ?>
					</textarea>
					<?php
					$name = $superoption['name'];
					if(isset($superoption['option'])){
						$option = $superoption['option'];
					}
					$value =  $super_mobile_menu_settings[$just_name];
					$value = json_decode($value);
					$count = 0;
					if(!empty( $value )) {
						foreach ($value as $icons => $icon ) { ?>
							<div class="icon-row">
								<div class="input-wrappers">
									<input type="text" class="iconpicker iconinput <?php echo $option ?>" value="<?php echo $icon->icon ?>">
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
								<input type="text" class="iconpicker iconinput">
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
	<?php
	wp_enqueue_script('smm-iconrepeater-js');
} 