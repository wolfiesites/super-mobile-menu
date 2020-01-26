<?php
$speroMenusRdy = smm_get_menus();
$hamburgersArray = smm_get_hamburgers();

$SMMSUPEROPTIONS = [
	[
		'type' => 'select',
		'name' => 'super_mobile_settings[general-menu]',
		'label' => 'Choose a menu',
		'options' => $speroMenusRdy,
	],
	[
		'type' => 'image',
		'name' => 'super_mobile_settings[general-logo]',
		'label' => 'Choose your logo',
		'default' => SMM_PLUGIN_URL . '/assets/img/pawel-witek.jpg',
	],
	[
		'type' => 'color',
		'label' => 'Choose color for menu bar',
		'name' => 'super_mobile_settings[general-menu-bar-color]',
		'default' => '#fff',
	],
	[
		'type' => 'color',
		'label' => 'Choose color for menu container',
		'name' => 'super_mobile_settings[general-menu-container-color]',
		'default' => '#fff',
	],
	[
		'type' => 'color',
		'label' => 'Choose color for Mobile menu overlay',
		'name' => 'super_mobile_settings[general-overlay-color]',
		'default' => '#000',
	],
	[
		'type' => 'iconpicker',
		'name' => 'super_mobile_settings[general-icon-parent]',
		'label' => 'Choose icon for parent element of mobile menu',
		'default' => 'fa-arrow-right',
	],
	[
		'type' => 'section',
		'label' => 'General settings',
		'id' => 'general',
	],
	[
		'type' => 'checkbox',
		'name' => 'super_mobile_settings[sticky]',
		'label' => 'Enable sticky menu?',
		'value' => 'on',
		'default' => 'on',
	],
	[
		'type' => 'image',
		'name' => 'super_mobile_settings[sticky-logo]',
		'label' => 'Choose your sticky logo',
		'default' => SMM_PLUGIN_URL . 'assets/img/pawel-witek.jpg',
	],
	[
		'type' => 'section',
		'label' => 'Sticky Menu',
		'id' => 'sticky-menu-section',
	],
	[
		'type' => 'checkbox',
		'name' => 'super_mobile_settings[topbar-display]',
		'label' => 'Display topbar menu?',
		'value' => 'on',
		'default' => 'off',
	],
	[
		'type' => 'radioimage',
		'name' => 'super_mobile_settings[topbar-layout]',
		'label' => 'Choose your layout',
		'value' => 'on',
		'options' => [
			[
				'label' => 'layout 1',
				'image' => SMM_PLUGIN_URL . 'assets/img/topbar-layouts/icons-left.svg',
			],
			[
				'label' => 'layout 2',
				'image' => SMM_PLUGIN_URL . 'assets/img/topbar-layouts/icons-right.svg',
			],
			[
				'label' => 'layout 3',
				'image' => SMM_PLUGIN_URL . 'assets/img/topbar-layouts/icons-search.svg',
			],
			[
				'label' => 'layout 4',
				'image' => SMM_PLUGIN_URL . 'assets/img/topbar-layouts/icons-left-right.svg',
			],
			[
				'label' => 'layout 5',
				'image' => SMM_PLUGIN_URL . 'assets/img/topbar-layouts/search-left.svg',
			],
			[
				'label' => 'layout 6',
				'image' => SMM_PLUGIN_URL . 'assets/img/topbar-layouts/search-right.svg',
			],
			[
				'label' => 'layout 7',
				'image' => SMM_PLUGIN_URL . 'assets/img/topbar-layouts/search-icons.svg',
			],
			[
				'label' => 'layout 8',
				'image' => SMM_PLUGIN_URL . 'assets/img/topbar-layouts/icons-search.svg',
			],
			[
				'label' => 'layout 9',
				'image' => SMM_PLUGIN_URL . 'assets/img/topbar-layouts/menu-search.svg',
			],
			[
				'label' => 'layout 10',
				'image' => SMM_PLUGIN_URL . 'assets/img/topbar-layouts/menu.svg',
			],
			[
				'label' => 'layout 11',
				'image' => SMM_PLUGIN_URL . 'assets/img/topbar-layouts/text.svg',
			],
			[
				'label' => 'layout 12',
				'image' => SMM_PLUGIN_URL . 'assets/img/topbar-layouts/lang-right.svg',
			],
			[
				'label' => 'layout 13',
				'image' => SMM_PLUGIN_URL . 'assets/img/topbar-layouts/lang-left.svg',
			],
			[
				'label' => 'layout 14',
				'image' => SMM_PLUGIN_URL . 'assets/img/topbar-layouts/lang-icons.svg',
			],
			[
				'label' => 'layout 15',
				'image' => SMM_PLUGIN_URL . 'assets/img/topbar-layouts/icons-lang.svg',
			],
			[
				'label' => 'layout 16',
				'image' => SMM_PLUGIN_URL . 'assets/img/topbar-layouts/lang-menu.svg',
			],
			[
				'label' => 'layout 17',
				'image' => SMM_PLUGIN_URL . 'assets/img/topbar-layouts/menu-lang.svg',
			],
			[
				'label' => 'layout 18',
				'image' => SMM_PLUGIN_URL . 'assets/img/topbar-layouts/lang-text.svg',
			],
			[
				'label' => 'layout 19',
				'image' => SMM_PLUGIN_URL . 'assets/img/topbar-layouts/text-lang.svg',
			],
			[
				'label' => 'layout 20',
				'image' => SMM_PLUGIN_URL . 'assets/img/topbar-layouts/lang-search.svg',
			],
			[
				'label' => 'layout 21',
				'image' => SMM_PLUGIN_URL . 'assets/img/topbar-layouts/search-lang.svg',
			],
		]
	],
	[
		'type' => 'select',
		'name' => 'super_mobile_settings[topbar-menu]',
		'label' => 'Choose a menu for topbar',
		'options' => $speroMenusRdy,
	],
	[
		'type' => 'color',
		'label' => 'Choose color for menu topbar',
		'name' => 'super_mobile_settings[topbar-backgroundcolor]',
		'default' => '#fff',
	],
	[
		'type' => 'content',
		'name' => 'super_mobile_settings[topbar-text]',
		'label' => 'add text or shortcodes to topbar',
		'default' => ' ',
	],
	[
		'type' => 'section',
		'label' => 'Top menu bar',
		'id' => 'top-menu-bar-section',
	],
	[
		'type' => 'radioimage',
		'name' => 'super_mobile_settings[mainbar-layout]',
		'label' => 'Choose your Main menu bar layout',
		'value' => 'on',
		'options' => [
			[
				'label' => 'layout 1',
				'image' => SMM_PLUGIN_URL . 'assets/img/layouts/logo-hamb.svg',
			],
			[
				'label' => 'layout 2',
				'image' => SMM_PLUGIN_URL . 'assets/img/layouts/hamb-logo.svg',
			],
			[
				'label' => 'layout 3',
				'image' => SMM_PLUGIN_URL . 'assets/img/layouts/hamb-logo-search.svg',
			],
			[
				'label' => 'layout 4',
				'image' => SMM_PLUGIN_URL . 'assets/img/layouts/hamb-search-logo.svg',
			],
			[
				'label' => 'layout 5',
				'image' => SMM_PLUGIN_URL . 'assets/img/layouts/logo-search-hamb.svg',
			],
			[
				'label' => 'layout 6',
				'image' => SMM_PLUGIN_URL . 'assets/img/layouts/logo-lang-hamb.svg',
			],
		]
	],
	[
		'type' => 'section',
		'label' => 'Main Menu Bar',
		'id' => 'template-section',
	],
	[
		'type' => 'checkbox',
		'name' => 'super_mobile_settings[container-language]',
		'label' => 'Display language switcher?',
		'value' => 'on',
		'default' => 'on',
	],
	[
		'type' => 'radioimage',
		'name' => 'super_mobile_settings[container-layout]',
		'label' => 'Choose your Main menu bar layout',
		'value' => 'on',
		'options' => [
			[
				'label' => 'layout 1',
				'image' => SMM_PLUGIN_URL . 'assets/img/layouts/logo-hamb.svg',
			],
			[
				'label' => 'layout 2',
				'image' => SMM_PLUGIN_URL . 'assets/img/layouts/hamb-logo.svg',
			],
			[
				'label' => 'layout 3',
				'image' => SMM_PLUGIN_URL . 'assets/img/layouts/hamb-logo-search.svg',
			],
			[
				'label' => 'layout 4',
				'image' => SMM_PLUGIN_URL . 'assets/img/layouts/hamb-search-logo.svg',
			],
			[
				'label' => 'layout 5',
				'image' => SMM_PLUGIN_URL . 'assets/img/layouts/logo-search-hamb.svg',
			],
			[
				'label' => 'layout 6',
				'image' => SMM_PLUGIN_URL . 'assets/img/layouts/logo-lang-hamb.svg',
			],
		]
	],
	[
		'type' => 'text',
		'name' => 'super_mobile_settings[container-desc]',
		'value' => 'witek jest niesamowity',
		'label' => 'Description in mobile container',
		'default' => 'witek jest super',
	],
	[
		'type' => 'content',
		'name' => 'super_mobile_settings[container-content]',
		'label' => 'add text with shortcodes to mobile container',
		'default' => ' ',
	],
	[
		'type' => 'section',
		'label' => 'Mobile Menu Container',
		'id' => 'mobile-menu-container-section',
	],
	[
		'type' => 'select',
		'name' => 'super_mobile_settings[hamburger]',
		'label' => 'Choose animation switcher',
		'options' => $hamburgersArray,
		'default' => 'hamburger--3dx',
	],
	[
		'type' => 'section',
		'label' => 'Hamburger',
		'id' => 'hamburger-section',
	],
	[
		'type' => 'checkbox',
		'name' => 'super_mobile_settings[social-on]',
		'label' => 'Enable social icons?',
		'value' => 'on',
		'default' => 'on',
	],
	[
		'type' => 'iconrepeater',
		'name' => 'super_mobile_settings[social-icons]',
		'label' => 'Choose your icons',
		'option' => 'social',
	],
	[
		'type' => 'section',
		'label' => 'Social Icons',
		'id' => 'social-icons-section',
	],
	[
		'type' => 'iconrepeater',
		'name' => 'super_mobile_settings[icons-left]',
		'label' => 'Choose your left icons',
	],
	[
		'type' => 'iconrepeater',
		'name' => 'super_mobile_settings[icons-right]',
		'label' => 'Choose your right icons',
	],
	[
		'type' => 'section',
		'label' => 'Contact Icons',
		'id' => 'contact-icon-section',
	],
	[
		'type' => 'color',
		'label' => 'Choose background color for active item',
		'name' => 'super_mobile_settings[typography-bg-active-color]',
		'default' => '#000',
	],
	[
		'type' => 'color',
		'label' => 'Choose font color',
		'name' => 'super_mobile_settings[typography-font-color]',
		'default' => '#000',
	],
	[
		'type' => 'color',
		'label' => 'Choose active item font color',
		'name' => 'super_mobile_settings[typography-active-font-color]',
		'default' => '#fff',
	],
	[
		'type' => 'fontpicker',
		'label' => 'Choose font type for your mobile menu!',
		'name' => 'super_mobile_settings[typography-fonttype]',
		'default' => 'Calibri',
	],
	[
		'type' => 'fontpicker',
		'label' => 'Choose font type for your title!',
		'name' => 'super_mobile_settings[typography-fonttype-title]',
		'default' => 'Calibri',
	],
	[
		'type' => 'text',
		'name' => 'super_mobile_settings[typography-fontsize-menu-itmes]',
		'value' => 'witek jest niesamowity',
		'label' => 'set font size for menu items<br><small>value is in px</small>',
		'default' => '18',
	],
	[
		'type' => 'section',
		'label' => 'Typography',
		'id' => 'typography-section',
	],
	[
		'type' => 'text',
		'name' => 'super_mobile_settings[hide-desktop-menu]',
		'value' => 'witek jest niesamowity',
		'label' => 'Hide desktop menu<br><small>[write: #id , .class ]</small>',
		'default' => '#masthead',
	],
	[
		'type' => 'section',
		'label' => 'Hide Desktop Menu',
		'id' => 'hide-menu-section',
	],
	[
		'type' => 'text',
		'label' => 'Write in pixels from when to show mobile menu?<br><small>ex.: 768</small>',
		'name' => 'super_mobile_settings[breakpoint]',
	],
	[
		'type' => 'section',
		'label' => 'Responsive',
		'id' => 'responsive-section',
	],
	[
		'type' => 'section',
		'label' => 'Import Template',
		'id' => 'import-section',
	],
	[
		'type' => 'text',
		'label' => 'Activate to get more fancy templates<br><small><a href="#">get activation code</a></small>',
		'name' => 'super_mobile_settings[activation-code]',
	],
	[
		'type' => 'text',
		'label' => 'Set google Api key for your font picker<br><small><a target="_blank" href="https://developers.google.com/fonts/docs/developer_api#APIKey">get api key</a></small>',
		'name' => 'super_mobile_settings[google-api]',
	],
	[
		'type' => 'section',
		'label' => 'Api and Actication',
		'id' => 'api-section',
	],
];