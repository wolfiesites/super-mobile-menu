<ul>
	<?php
					//tabs for sections
	$first = true;
	foreach ( $SMMSUPEROPTIONS as $superoption ): ?>
		<?php 
		if($superoption['type'] == 'section') {
			if($first) {
				$class = 'active';
				$first = false;
			} else  {
				$class = '';
			}
			?>
			<li data-target="<?php echo $superoption['id'] ?>" class="<?php echo $class ?> smm-tab"><?php echo $superoption['label'] ?></li>
			<?php 
		}
	endforeach ?>
</ul>