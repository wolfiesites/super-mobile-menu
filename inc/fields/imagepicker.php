<?php
if( $superoption['type'] == 'image') {
	echo '<tr valign="top">';
	echo '<th scope="row">' . $superoption['label'] . '</th>';
	echo '<td>';
	$just_name = get_between($superoption['name'], "[", "]");
	echo '<div class="smm-option-wrapper">';
	echo '<button class="smm-image-picker">Upload Image</button>';
	echo '<button class="smm-image-remove">Remove Image</button>';
	echo '<input class="smm-image-value" type="text" name="'.$superoption['name'].'" value="'. $super_mobile_menu_settings[$just_name] .'" hidden>';
	echo '<div class="smm-image-container">';
	if (is_numeric($super_mobile_menu_settings[$just_name])) {
		$image_url = wp_get_attachment_image_src( $super_mobile_menu_settings[$just_name], 'thumbnail' )[0];
		echo '<img class="true_pre_image" src="' . $image_url . '" style="max-width:auto;width:auto;height:100px;object-fit:cover;display:block;" />';
	} else {
		echo '<img class="true_pre_image" src="' . $super_mobile_menu_settings[$just_name] . '" style="max-width:auto;width:auto;height:100px;object-fit:cover;display:block;" />';
	}
	echo '</div>';
	echo '</div>';
	echo '</td>';
	echo '</tr>';
} 