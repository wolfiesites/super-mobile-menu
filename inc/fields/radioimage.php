<?php 
if($superoption['type'] == 'radioimage'){ ?>
	<tr valign="top">
		<th scope="row"><?php echo $superoption['label'] ?> </th>
		<td>
			<div class="smm-option-wrapper">
				<div class="smm-radioimage-wrapper">
				<?php
				$count = 0;
				$just_name = get_between($superoption['name'], "[", "]");
				foreach($superoption['options'] as $option ) {
					if( $count == $super_mobile_menu_settings[$just_name] ) {
						echo '<div class="radioimage option-'.$count.' active">';
						echo '<img src="'. $option['image'] . '">';
						echo '<div class="title-wrapper">';
						echo '<input type="radio" name="'.$superoption['name'].'" value="'.$count.'" checked > '. $option['label'] . '<br>';
						echo '</div>';
						echo '</div>';
					} else {
						echo '<div class="radioimage option-'.$count.'">';
						echo '<img src="'. $option['image'] . '">';
						echo '<div class="title-wrapper">';
						echo '<input type="radio" name="'.$superoption['name'].'" value="'.$count.'">'.$option['label'].'<br>';
						echo '</div>';
						echo '</div>';
					}
					$count++;
				} ?>
				</div><!-- /smm-radioimage-wrapper -->
			</div>
		</td>	
	</tr>
<?php }