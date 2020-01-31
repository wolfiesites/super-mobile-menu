<?php 
global $SMMSUPEROPTIONS;
wp_enqueue_style('smm-options-css');
wp_enqueue_script('smm-helpers-js');
$super_mobile_menu_settings = get_option('super_mobile_settings');
?>
<!-- //add font awesome -->
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="wrap">
	<h1 class="smm-main-title">Super Mobile Menu</h1>
	<div class="smm-container loading" style="position: relative;opacity:0;">
		<div class="smm-row">
			<div class="smm-sidebar">
				<?php include(SMM_PLUGIN_PATH . 'inc/templates/print_tabs.php'); ?>
			</div><!-- /smm-sidebar -->
			<div class="smm-main-options">
				<?php include(SMM_PLUGIN_PATH . 'inc/templates/print_option_fields.php'); ?>
			</div><!-- /smm-main-options -->
			<div class="smm-information">
				<div class="box">
					<div class="smm-header">
						<div class="smm-row">
							<div class="quote">
								<i class="fa fa-quote-right" aria-hidden="true"></i>
								<p>Standing on the giants shoulders, let you see more!</p>
							</div><!-- /quote -->
							<div class="owner-wrapper" style="width:80px;height:80px;">
								<img class="owner" src="<?php echo SMM_PLUGIN_URL . 'assets/img/pawel-witek.jpg' ?>">
							</div><!-- /owner-wrapper -->
						</div><!-- /smm-row -->
						<p style="text-align: right;">Paweł Witek CEO at <a href="https://wolfiesites.com">wolfiesites.com</a></p>
					</div><!-- /header -->
				</div><!-- /box -->
			</div><!-- /smm-main-options -->
		</div><!-- /row -->
	</div><!-- /smm-container -->
	<?php
wp_enqueue_media();
wp_enqueue_script('smm-iconpicker-js');
wp_enqueue_script('smm-switcher-js');
wp_enqueue_script('smm-tabs-js');
?>
<script>
	jQuery(document).ready(function($){
		$('.colorpicker').wpColorPicker();
		$('.loading').addClass('loaded');
		$('.btn-default').click(function(e){
			e.preventDefault();
		});
		$('.submit-default').click(function(e){
			e.preventDefault();
			if (window.confirm("Do you really want to return to default settings?")) { 
				self.window.location = '<?php echo admin_url('admin-ajax.php?action=import&option=default') ?>';
			}
		});
		$('#submit').click(function(){
			var activeSection = $('.smm-sidebar .smm-tab.active').data('target');
			setCookie('smmActiveSection', activeSection);
		});
		var cookie = getCookie('smmActiveSection');
		console.log(cookie);
		if(cookie){
			setTimeout(function(){
				$('.smm-tab[data-target="'+cookie+'"]').trigger('click');
			}, 200)
		}
		$('.radioimage').click(function(){
			$('.radioimage').removeClass('active');
			$('.radioimage input').removeAttr('checked');
			$(this).addClass('active');
			$(this).find('input').attr('checked', 'checked');;
		});
	});
</script>
</div>