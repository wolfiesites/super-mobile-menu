<?php
if($superoption['type'] == 'checkbox') {
	echo '<tr valign="top">';
	echo '<th scope="row">' . $superoption['label'] . '</th>';
	echo '<td>';
	echo '<div class="smm-option-wrapper checkbox">';
	$just_name = get_between($superoption['name'], "[", "]");
	$switch_off = !isset($super_mobile_menu_settings[$just_name]);
	if($switch_off) { ?>
		<label class="switch">
			<input type="checkbox" name="<?php echo $superoption['name'] ?>">
			<span class="slider round"></span>
		</label>
	<?php } else { ?>
		<label class="switch active">
			<input type="checkbox" name="<?php echo $superoption['name'] ?>" checked>
			<span class="slider round"></span>
		</label>
	<?php }
	echo '</div>';
	echo '</td>';	
	echo '</tr>';
} 