<form method="post" action="options.php">
	<?php settings_fields( 'super_mobile_settings' ); ?>
	<?php do_settings_sections( 'super_mobile_settings' ); ?>
	<div class="smm-settings-bar">
		<button class="btn btn-default submit-default">back to default</button>
		<?php submit_button(); ?>
	</div><!-- /smm-settings-bar -->
	<div class="smm-options-box">
		<table class="form-table">
			<?php 
			$first_section = true;
			$option_fields = '';
			foreach ($SMMSUPEROPTIONS as $superoption ) {
				ob_start();
				//add field types
				foreach (glob( SMM_PLUGIN_PATH . "inc/fields/*.php") as $filename) {
					include $filename;
				}
				//make section tabs for divided settings pages
				$option_fields .= ob_get_clean();
				if( $superoption['type'] == 'section' ) {
					if($first_section) {
						$class = 'active';
						$first_section = false;
					} else  {
						$class = '';
					}
					echo '<tbody id="'.$superoption['id'].'" class="section '.$class.'">';
					echo $option_fields;
					echo '</tbody>';
					ob_start();
					$option_fields = ob_get_clean();
				}
			}
			echo $option_fields;
			?>
		</table>
	</div><!-- /smm-options-box -->

</form>