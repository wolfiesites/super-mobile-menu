<?php
if($superoption['type'] == 'social') {
	echo '<tr valign="top">';
	echo '<th scope="row">' . $superoption['label'] . '</th>';
	echo '<td>';
	echo '<div class="smm-option-wrapper conditional smm-social-icons">';
	$just_name = get_between($superoption['name'], "[", "]");
	$switch_off = !isset($super_mobile_menu_settings[$just_name]['checkbox']);
	$switch_on = isset($super_mobile_menu_settings[$just_name]['checkbox']);
	if($switch_off) { ?>
		<label class="switch">
			<input type="checkbox" name="<?php echo $superoption['name'] . "[checkbox]" ?>">
			<span class="slider round"></span>
		</label>
	<?php } else { ?>
		<label class="switch active">
			<input type="checkbox" name="<?php echo $superoption['name']. "[checkbox]" ?>" checked>
			<span class="slider round"></span>
		</label>  
	<?php } 
	if($switch_on) {
		$show = "";
	} else {
		$show = "hide";
	}
	?>
	<div class="conditional-wrapper <?php echo $show ?>">
		<?php
		if(!empty($super_mobile_menu_settings[$just_name]['socials'])) {
			$count = 0;
			foreach ($super_mobile_menu_settings[$just_name]['socials'] as $key => $value) { ?>
				<div class="social d-flex">
					<div class="input-wrappers">
						<input class="iconpicker-social" type="text" name="<?php echo $superoption['name'] . "[socials][$count][icon]" ?>" value="<?php echo $super_mobile_menu_settings[$just_name]['socials'][''.$count.'']['icon']  ?>">

						<input type="text" name="<?php echo $superoption['name'] . "[socials][$count][link]" ?>" value="<?php echo $super_mobile_menu_settings[$just_name]['socials'][''.$count.'']['link']  ?>">

					</div><!-- /input-wrappers -->
					<div class="actions">
						<i class="fa fa-minus-circle minus" aria-hidden="true"></i>
						<i class="fa fa-plus-circle plus" aria-hidden="true"></i>
					</div><!-- /actions -->
				</div>
				<?php $count++; ?>
				<?php
			} 
		} else { ?>
			<div class="social d-flex">
				<div class="input-wrappers">
					<input class="iconpicker-social" type="text" name="super_mobile_settings[social][socials][0][icon]" value="">
					<input type="text" name="<?php echo $superoption['name'] . "[socials][0][link]" ?>" value="">
				</div><!-- /input-wrappers -->
				<div class="actions">
					<i class="fa fa-minus-circle minus" aria-hidden="true"></i>
					<i class="fa fa-plus-circle plus" aria-hidden="true"></i>
				</div><!-- /actions -->
			</div>
		<?php } ?>
	</div>
</div>
</td>	
</tr>
<?php
} 