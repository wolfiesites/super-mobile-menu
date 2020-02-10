<?php
if( $superoption['type'] == 'color') {
	// wp_enqueue_style('wp-color-picker');
	wp_enqueue_script('smm-iconpicker-js');
	wp_enqueue_script('smm-iconpicker-alpha-js');
	echo '<tr valign="top">';
	echo '<th scope="row">' . $superoption['label'] . '</th>';
	echo '<td>';
	echo '<div class="smm-option-wrapper">';
	$just_name = get_between($superoption['name'], "[", "]");
	echo '<input class="colorpicker" data-alpha="true" type="text" name="'.$superoption['name'].'" value="'. $super_mobile_menu_settings[$just_name] .'">';
	echo '</div>';
	echo '</td>';	
	echo '</tr>';
} 