<?php 
if($superoption['type'] == 'content'){ ?>
	<tr valign="top">
		<th scope="row"><?php echo $superoption['label'] ?> </th>
		<td>
			<div class="smm-option-wrapper">
				<?php 
				$just_name = get_between($superoption['name'], "[", "]");
				$content = $super_mobile_menu_settings[$just_name];
				wp_editor( $content, $just_name, array(
					'wpautop'       => true,
					'media_buttons' => true,
					'textarea_name' => $superoption['name'],
					'textarea_rows' => 5,
					'teeny'         => true
				) );
				?>
			</div>
		</td>	
	</tr>
<?php }