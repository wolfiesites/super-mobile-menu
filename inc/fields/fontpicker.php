<?php
if($superoption['type'] == 'fontpicker') {
	echo '<tr valign="top">';
	echo '<th scope="row">' . $superoption['label'] . '</th>';
	echo '<td>';
	echo '<div class="smm-option-wrapper">';
	$just_name = get_between($superoption['name'], "[", "]");
	echo "<input hidden class='fontpicker" . $index ."' type='text' name='".$superoption["name"]."' value='". $super_mobile_menu_settings[$just_name] ."'>";
	?>
	<div id="font-picker-main<?php echo $index ?>"></div>
	<?php
	echo '</div>';
	echo '</td>';	
	echo '</tr>';
	wp_enqueue_script('smm-fontpicker-js');
	wp_enqueue_script('smm-fontpicker-settings-js');
	?>
	<script type="text/javascript">
		jQuery(document).ready(function($){
			var t = this;
			var activeFont;
			var fontObject = '<?php echo $super_mobile_menu_settings[$just_name] ?>';
			var googleApiKey;
			if(fontObject.length > 0 ){
				fontObject = JSON.parse(fontObject);
			}
			var activeFont = fontObject.activeFontFamily;
			if($('.fontpicker<?php echo $index ?>').val()){
				activeFont = activeFont;
			} else {
				activeFont = "Open Sans";
			}
			const fontPicker = new FontPicker(
    googleApiKey, // Google API key
    activeFont, // Default font
    { 
    	limit: 30,
    	pickerId: 'main<?php echo $index ?>',
    },
    function(){
    	var currentFont = fontPicker.getActiveFont();
    	var fontObject = JSON.stringify(this);
    	$('.fontpicker<?php echo $index ?>').val(fontObject);
    } // Additional options
    );
		});
	</script>
	<?php
} 