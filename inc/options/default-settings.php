<form id="default-settings" method="post" action="options.php" style="display: none;">
	<?php 
	settings_fields( 'super_mobile_settings' ); 
	do_settings_sections( 'super_mobile_settings' );
	submit_button(); 
	?>
	<?php
	foreach ($SMMSUPEROPTIONS as $superoption ) {
		if ($superoption['type'] == 'radio') {
			$just_name = get_between($superoption['name'], "[", "]");
			foreach($superoption['options'] as $option ) {
				if( $option == $superoption['default'] ) {
					echo '<input type="radio" name="'.$superoption['name'].'" value="'.$option.'" checked > '. $option . '<br>';
				} else {
					echo '<input type="radio" name="'.$superoption['name'].'" value="'.$option.'">'.$option.'<br>';
				}
			}
		} elseif($superoption['type'] == 'text' ){
			$just_name = get_between($superoption['name'], "[", "]");
			echo '<input type="'.$superoption['type'].'" name="'.$superoption['name'].'" value="'. $superoption['default'] .'">';
		} elseif( $superoption['type'] == 'image') {
			$just_name = get_between($superoption['name'], "[", "]");
			echo '<input class="smm-image-value" type="text" name="'.$superoption['name'].'" value="'. $superoption['default'] .'">';
		} elseif( $superoption['type'] == 'select') {
			$just_name = get_between($superoption['name'], "[", "]");
			echo '<select style="max-width:220px;width:100%;" type="'.$superoption['type'].'" name="'.$superoption['name'].'" value="'. $superoption['default'] .'">';
			foreach($superoption['options'] as $arr ) {
				if( $arr == $superoption['default'] ) {
					echo '<option selected >' . $arr . '</option>';
				} else {
					echo '<option>' . $arr . '</option>';
				}
			}
		} elseif( $superoption['type'] == 'color') {
			$just_name = get_between($superoption['name'], "[", "]");
			echo '<input class="colorpicker" type="text" name="'.$superoption['name'].'" value="'. $superoption['default'] .'">';
		} elseif($superoption['type'] == 'iconpicker') {
			$just_name = get_between($superoption['name'], "[", "]");
			echo '<input class="iconpicker" type="text" name="'.$superoption['name'].'" value="'. $superoption['default'] .'">';
		} elseif($superoption['type'] == 'checkbox') {
			$just_name = get_between($superoption['name'], "[", "]");
			$switch_off = !isset($superoption['default']);
			if($switch_off || $superoption['default'] == 'off') { ?>
				<input type="checkbox" name="<?php echo $superoption['name'] ?>">
			<?php } else { ?>
				<input type="checkbox" name="<?php echo $superoption['name'] ?>" checked>
			<?php }
		} elseif($superoption['type'] == 'social') {
			$just_name = get_between($superoption['name'], "[", "]");
			$switch_off = !isset($super_mobile_menu_settings[$just_name]['checkbox']);
			$switch_on = isset($super_mobile_menu_settings[$just_name]['checkbox']);
			if($switch_off || $superoption['default'] == 'off') { ?>
				<input type="checkbox" name="<?php echo $superoption['name'] . "[checkbox]" ?>">
			<?php } else { ?>
				<input type="checkbox" name="<?php echo $superoption['name']. "[checkbox]" ?>" checked>
				<?php 
			} 
		} 
	}
	?>
</form>