<?php 
if( $superoption['type'] == 'select') {
	echo '<tr valign="top">';
	echo '<th scope="row">' . $superoption['label'] . '</th>';
	echo '<td>';
	echo '<div class="smm-option-wrapper">';
	$just_name = get_between($superoption['name'], "[", "]");
	echo '<select style="max-width:220px;width:100%;" type="'.$superoption['type'].'" name="'.$superoption['name'].'" value="'. $super_mobile_menu_settings[$just_name] .'">';
	foreach($superoption['options'] as $arr ) {
		if( $arr == $super_mobile_menu_settings[$just_name] ) {
			echo '<option selected >' . $arr . '</option>';
		} else {
			echo '<option>' . $arr . '</option>';
		}
	}
	echo '</select>';
	echo '</div>';
	echo '</td>';	
	echo '</tr>';
} 