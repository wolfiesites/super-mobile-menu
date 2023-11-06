<?php
//gather all options to variables
$smm_options = get_option('super_mobile_settings', false);
$smm_main_menu = $smm_options['general-menu'];
$smm_logo = $smm_options['general-logo'];
$smm_menu_bar_color = $smm_options['general-menu-bar-color'];
$smm_menu_container_color = $smm_options['general-menu-container-color'];
$smm_overlay_color = $smm_options['general-overlay-color'];
$smm_icon_parent = $smm_options['general-icon-parent'];
$smm_sticky_on = $smm_options['sticky'];
$smm_sticky_logo = $smm_options['sticky-logo'];
$topbar_display = $smm_options['topbar-display'];
$topbar_layout = $smm_options['topbar-layout'];
$topbar_menu = $smm_options['topbar-menu'];
$topbar_color = $smm_options['topbar-backgroundcolor'];
$topbar_text = $smm_options['topbar-text'];
$mainbar_layout = $smm_options['mainbar-layout'];
$container_language = $smm_options['container-language'];
$container_layout = $smm_options['container-layout'];
$container_desc = $smm_options['container-desc'];
$container_content = $smm_options['container-content'];
$hamburger = $smm_options['hamburger'];
$hamburger_box_bg_color = $smm_options['hamburger-box-bg-color'];
$hamburger_lines_color = $smm_options['hamburger-lines-color'];
$hamburger_lines_thickness = $smm_options['hamburger-lines-thickness'];
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
$logo = wp_get_attachment_image( $smm_logo, 'medium', false, ['class'=> 'nolazy'] );
$sticky_logo = wp_get_attachment_image( $smm_sticky_logo, 'medium', false, ['class'=> 'nolazy'] );




if(is_user_logged_in()) {
	$topGapHeight = '46px';
} else {
	$topGapHeight = '0px';
}
?>
<style type="text/css">
	body.noscroll {
		overflow-y: hidden;
	}
	#super-mobile-menu {
		display: none;
	}
	#super-mobile-menu-container {
		padding-top: 140px;
		display: none;
		width:100%;
		height: 100vh;
		overflow-y: scroll;
		background: <?php echo $smm_menu_container_color ?>;
		position: fixed;
		top: calc( 0px + <?php echo $topGapHeight ?> );
		z-index: 10;
	}
	#super-mobile-menu-container {
		color: black;
	}
	#super-mobile-menu-container li {
		color: black;
	}
	.smm-menu-container {
		z-index: 998;
	}
	.smm-overlay {
		display: none;
	}
	.smm-hamburger-wrapper, .smm-hamburger button {
		outline: none !important;
	}
	.smm-hamburger button {
		background: transparent !important;
		background: <?php echo $hamburger_box_bg_color ?> !important;
		border: none !important;
	}
	#super-mobile-menu .hamburger-inner, #super-mobile-menu .hamburger-inner:before, #super-mobile-menu .hamburger-inner:after {
		background: <?php echo $hamburger_lines_color ?>;
	}
	.smm-mainbar > .smm-container {
	background:	<?php echo $smm_menu_bar_color ?>!important;
	}
	/*add here css from front/css/style.css*/
	@media screen and (max-width: <?php echo $breakpoint ?>px) {
		<?php
		if(is_user_logged_in()) { ?>
			html {
				margin-top: 0px !important;
			}
			#super-mobile-menu  {
				top: 46px !important;
				position: relative;
				z-index: 20;
			}
			.smm-menu-placeholder {
				padding-top: 46px !important;
				box-sizing: content-box !important;
			}
		<?php } ?>
		<?php echo $hide_desktop_menu ?> {
			display:none !important;
		}
		body {
			/*position: relative;*/
		}
		.smm-overlay {
			background: rgba(0,0,0,0.8);
			pointer-events:none;
			position: fixed;
			width: 100%;
			height: 100vh;
			display: block;
			top: <?php echo $topGapHeight ?>;
		}
		#super-mobile-menu-container {
			display: block;
		}
		#super-mobile-menu {
			display: block;
			position: absolute;
			width: 100%;
			top: 0;
			left: 0;
			height: 100px;
			z-index: 995;
		}
		.smm-logo-wrapper {
			display: flex;
			justify-content: center;
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
		.visible {
			visibility: visible;
			pointer-events:initial;
		}
		.smm-hidden {
			visibility: hidden;
			pointer-events:none;
		}
		.smm-justify-between {
			justify-content: space-between;
		}
		.d-none {
			display: none;
		}
		.main-row > div {
			width: 33% !important;
		}
		.main-row > div svg {
			width: 100% !important;
		}
		.main-row .social-icons-wrapper a {
			margin-right: 2px !important;
		}
		.main-row .social-icons-wrapper {
			justify-content: flex-end;
		}
		#super-mobile-menu-container .menu li a {
			text-align: center;
			border:none !important;
			padding: 20px !important;
		}
		#super-mobile-menu-container .wpml-ls {
			display: flex;
			justify-content: center;
			height: 60px;
			padding: 20px 0px !important;
			align-items: center;
			box-sizing: content-box !important;
		}
		#super-mobile-menu-container .wpml-ls a, .wpml-ls li:after {
			font-size: 30px;
			color: black !important;
		}
		#super-mobile-menu-container .wpml-ls li:after {
			right: -5px;
		}
	}
</style>
<?php 
$sticky_class = ($smm_sticky_on === 'on') ? ' sticky' : $sticky_class = '' ;
?>
<div id="super-mobile-menu" class="super-mobile-menu">
	<div class="smm-topbar">
		<div class="smm-container">

		</div>
	</div><!-- /smm-topbar -->
	<div class="smm-mainbar<?php echo $sticky_class ?>">
		<div class="smm-container" style="background:<?php echo $smm_menu_bar_color ?>;">
			<div class="smm-row smm-align-center smm-justify-between main-row">
				<div class="smm-hamburger-wrapper">
					<div class="smm-hamburger">
						<button class="<?php echo $hamburger ?>" type="button">
							<span class="hamburger-box">
								<span class="hamburger-inner"></span>
							</span>
						</button>
					</div><!-- /smm-hamburger -->
				</div><!-- /smm-hamburger-wrapper -->
				<div class="smm-logo-wrapper">
					<a href="<?php echo site_url('/') ?>">
						<img class="nolazy" src="https://morelewska.com/wp-content/uploads/2020/10/logo-morelewska.svg">
						<!-- <?php echo $logo ?> -->
					</a>
				</div><!-- /smm-logo-wrapper -->
				<div class="smm-socia-wrapper">
					<?php echo do_shortcode('[social-icons]'); ?>
				</div><!-- /smm-socia-wrapper -->
				<div class="smm-language-wrapper d-none">
				</div><!-- /smm-language-wrapper -->
				
			</div><!-- /smm-row -->
		</div><!-- /smm-container -->
	</div><!-- /smm-mainbar -->
</div><!-- /super-mobile-menu -->
<div id="super-mobile-menu-container" class="smm-menu-container smm-hidden">
	<div class="wrapper">
		<div class="container-top-section">

			<div class='language-wrapper'>
				<?php dynamic_sidebar('sidebar-666'); ?>
			</div>
		</div>
		<?php
		$icon = '<i class="' . $smm_icon_parent . '" aria-hidden="true"></i>';
		$menu = wp_nav_menu( [ 
			'menu' => $smm_main_menu,
			'after' => $icon,
		] );
		if (!empty($menu)) {
			echo $menu;
		}

		?>
		<div class="social-wrapper">
			<?php echo do_shortcode('[social-icons]'); ?>
		</div>
	</div>
</div><!-- /super-mobile-menu-container -->
<div class="smm-overlay smm-hidden"></div><!-- /smm-overlay -->
<script type="text/javascript">
	jQuery(document).ready(function($){ 
		var ww = $(window).width();
		var hamburger = $('.smm-hamburger button');
		var mobileContainer = $('#super-mobile-menu-container');
		var mobileOverlay = $('.smm-overlay');
		var icon = $('#super-mobile-menu-container  li > i');
		var menu_item_height = $('#super-mobile-menu-container li a').outerHeight();

		const observer = new MutationObserver((mutations) => { 
			mutations.forEach((mutation) => {
				const el = mutation.target;
				// console.log(mutation.addedNodes[0].classList[2]);
				togglePlaceholder();
				observer.disconnect();
			});
		});
		var observedElement = document.querySelectorAll('.smm-logo-wrapper')[0];
		if (observedElement) {
			observer.observe(observedElement, { 
				attributes: true, 
				attributeOldValue: true, 
				childList: true,
				subtree: true,
			});
		}
		function showEl(element){
			$(element).addClass('visible');
		}
		function hideEl(element){
			$(element).addClass('smm-hidden');
		}
		function animateCSS(element, animationName, speed, callback) {
			if(element instanceof jQuery) {
				var className;
				var classArray = element.attr('class');
				classArray = classArray.split(' ');
				className = classArray[0];
				var element = '.'+className;
			}
			const node = document.querySelector(element);
			node.classList.remove('smm-hidden', 'visible');
			node.classList.add('animated', animationName, speed);
			function handleAnimationEnd() {
				node.classList.remove('animated', animationName, speed)
				node.removeEventListener('animationend', handleAnimationEnd)
				if (typeof callback === 'function') callback(element)
			}
		node.addEventListener('animationend', handleAnimationEnd)
	}
	function togglePlaceholder(){
		var ww = $(window).width();
		if(ww < <?php echo $breakpoint ?>) {
			if($('.smm-menu-placeholder').length) {
				var mainMenuBarHeight = $('#super-mobile-menu').height();
				$('.smm-menu-placeholder').css('height', mainMenuBarHeight);
			} else {
				var mainMenuBarHeight = $('#super-mobile-menu').height();
				$('<div class="smm-menu-placeholder" style="height:'+mainMenuBarHeight+'px;"><div>').prependTo('body');
			}
		} else {
			$('.smm-menu-placeholder').remove();
		}
	}
	function openMenuContainer(){
		animateCSS(mobileOverlay, 'fadeIn', 'faster', showEl);
		animateCSS(mobileContainer, 'fadeIn', 'faster', showEl);
		$('body').addClass('noscroll');
	}
	function closeMenuContainer(){
		animateCSS(mobileOverlay, 'fadeOut', 'faster', hideEl);
		animateCSS(mobileContainer, 'fadeOut', 'faster', hideEl);
		$('body').removeClass('noscroll');
	}


		//add event listeners
		hamburger.click(function(){
			$(this).toggleClass('is-active');
			if($(this).hasClass('is-active')){
				openMenuContainer();
			} else {
				closeMenuContainer();
			}
		});
		icon.click(function(e){
			e.preventDefault();
			$(this).siblings('ul').slideToggle(200);
			$(this).toggleClass('rotate');
		});
		$('.current-menu-item').parent().addClass('active');
		mobileOverlay.click(function(){
			hamburger.trigger('click');
		});
		icon.css('height', menu_item_height + 'px');
		//trigger functions on window resize
		$(window).resize(function(){
			togglePlaceholder();
		});

		// sticky
		var isSticky = false;
		window.addEventListener('scroll', function(e) {
			var mainWrap = $('.sticky');
			var mainWrapTop = mainWrap.offset().top;
			var windowTopScrollPosition = window.scrollY;
			if(mainWrapTop < windowTopScrollPosition ) {
				if(!isSticky) {
					mainWrap.children().addClass('sticky-active');
					isSticky = true;
				}
			} else {
				if(isSticky) {
					mainWrap.children().removeClass('sticky-active');
					isSticky = false;
				}

			}
		});

	});
</script>