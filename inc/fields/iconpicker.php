<?php
if($superoption['type'] == 'iconpicker') {
	wp_enqueue_style('smm-iconpicker-css');
	echo '<tr valign="top">';
	echo '<th scope="row">' . $superoption['label'] . '</th>';
	echo '<td>';
	echo '<div class="smm-option-wrapper">';
	$just_name = get_between($superoption['name'], "[", "]");
	echo '<input class="iconpicker" type="text" name="'.$superoption['name'].'" value="'. $super_mobile_menu_settings[$just_name] .'">';
	echo '</div>';
	echo '</td>';	
	echo '</tr>';
} 