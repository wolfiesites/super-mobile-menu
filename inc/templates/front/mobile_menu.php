<?php
//gather all options to variables
$smm_options = get_option('super_mobile_settings', false);
$smm_main_menu = $smm_options['general-menu'];
$smm_logo = $smm_options['general-logo'];
$smm_menu_bar_color = $smm_options['general-menu-bar-color'];
$smm_menu_container_color = $smm_options['general-menu-container-color'];
$smm_overlay_color = $smm_options['general-overlay-color'];
$smm_icon_parent = $smm_otion['general-icon-parent'];
$smm_sticky_on = $smm_options['sticky'];
$smm_sticky_logo = $smm_options['sticky-logo'];
$topbar_display = $smm_otions['topbar-display'];
$topbar_layout = $smm_options['topbar-layout'];
$topbar_menu = $smm_options['topbar-menu'];
$topbar_color = $smm_options['topbar-backgroundcolor'];
$topbar_text = $smm_options['topbar=text'];
$mainbar_layout = $smm_options['mainbar-layout'];
$container_language = $smm_options['container-language'];
$container_layout = $smm_options['container-layout'];
$container_desc = $smm_options['container-desc'];
$container_content = $smm_options['container-content'];
$hamburger = $smm_options['hamburger'];
$social_on = $smm_options['social-on'];
$social_icons = $smm_options['social-icons'];
$icons_left = $smm_options['icons-left'];
$icons_right = $smm_options['icons-right'];
$typography_bg_active_color = $smm_options['typography-bg-active-color'];
$typography_font_color = $smm_options['typography-font-color'];
$typography_font_size_menu_items = $smm_options['typography-fontsize-menu-itmes'];
$typography_active_font_color = $smm_options['typography-active-font-color'];
$typography_fonttype = $smm_options['typography-fonttype'];
$hide_desktop_menu = $smm_options['hide-desktop-menu'];
$breakpoint = $smm_options['breakpoint'];
// get logo
$logo = wp_get_attachment_image( $smm_logo, 'medium', false );
$sticky_logo = wp_get_attachment_image( $smm_sticky_logo, 'medium', false );
?>
<style type="text/css">
	#super-mobile-menu {
		display: none;
	}
	#super-mobile-menu-container {
		display: none;
	}
	@media screen and (max-width: <?php echo $breakpoint ?>px) {
		<?php echo $hide_desktop_menu ?> {
			display:none !important;
		}
		body {
			position: relative;
		}
		#super-mobile-menu {
			display: block;
			position: absolute;
			width: 100%;
			top: 0;
			left: 0;
			height: 100px;
			background: green;
		}
		.smm-logo-wrapper img {
			max-height: 100px;
			width: auto;
		}
		.smm-row {
			display: flex;
		}
		.smm-align-center {
			align-items: center;
		}
		.smm-push-right {
			margin: auto;
			margin-right:0;
		}
		.smm-push-left {
			margin: auto;
			margin-left:0;
		}
	}
</style>


<div id="super-mobile-menu" class="super-mobile-menu">
	<div class="smm-topbar">
		<div class="smm-container">

		</div>
	</div><!-- /smm-topbar -->
	<div class="smm-mainbar">
		<div class="smm-container">
			<div class="smm-row smm-align-center">
				<div class="smm-logo-wrapper">
					<a href="<?php echo site_url('/') ?>">
					<?php echo $logo ?>
					</a>
				</div><!-- /smm-logo-wrapper -->
				<div class="smm-language-wrapper">

				</div><!-- /smm-language-wrapper -->
				<div class="smm-hamburger-wrapper smm-push-right">
					<div class="smm-hamburger">
						<button class="<?php echo $hamburger ?>" type="button">
							<span class="hamburger-box">
								<span class="hamburger-inner"></span>
							</span>
						</button>
					</div><!-- /smm-hamburger -->
				</div><!-- /smm-hamburger-wrapper -->
			</div><!-- /smm-row -->
		</div><!-- /smm-container -->
	</div><!-- /smm-mainbar -->
</div><!-- /super-mobile-menu -->
<div id="super-mobile-menu-container">
	
</div><!-- /super-mobile-menu-container -->
<div class="smm-overlay">
	
</div><!-- /smm-overlay -->

<script type="text/javascript">
	jQuery(document).ready(function($){ 
		var ww = $(window).width();
		if(ww < <?php echo $breakpoint ?>) {
			$('<div class="smm-menu-placeholder" style="height:100px;"><div>').prependTo('body');
			$('.smm-hamburger button').click(function(){
				$(this).toggleClass('is-active');
			});
		}
	});
</script>