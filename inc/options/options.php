<?php
$speroMenusRdy = smm_get_menus();
$hamburgersArray = smm_get_hamburgers();

$SMMSUPEROPTIONS = [
	[
		'type' => 'select',
		'name' => 'super_mobile_settings[menu]',
		'label' => 'Choose a menu',
		'options' => $speroMenusRdy,
	],
	[
		'type' => 'image',
		'name' => 'super_mobile_settings[logo]',
		'label' => 'Choose your logo',
		'default' => SMM_PLUGIN_URL . '/assets/img/pawel-witek.jpg',
	],
	[
		'type' => 'color',
		'label' => 'Choose color for menu bar',
		'name' => 'super_mobile_settings[menu-bar-color]',
		'default' => '#fff',
	],
	[
		'type' => 'color',
		'label' => 'Choose color for menu container',
		'name' => 'super_mobile_settings[menu-container-color]',
		'default' => '#fff',
	],
	[
		'type' => 'color',
		'label' => 'Choose color for Mobile menu overlay',
		'name' => 'super_mobile_settings[overlay-color]',
		'default' => '#000',
	],
	[
		'type' => 'iconpicker',
		'name' => 'super_mobile_settings[icon]',
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
		'name' => 'super_mobile_settings[stickylogo]',
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
		'name' => 'super_mobile_settings[layout]',
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
		'type' => 'text',
		'name' => 'super_mobile_settings[opis]',
		'value' => 'witek jest niesamowity',
		'label' => 'Description in mobile container',
		'default' => 'witek jest super',
	],
	[
		'type' => 'content',
		'name' => 'super_mobile_settings[content-container]',
		'label' => 'add text with shortcodes to mobile container',
		'default' => ' ',
	],
	[
		'type' => 'section',
		'label' => 'Mobile Menu Container',
		'id' => 'mobile-menu-container-section',
	],
	[
		'type' => 'section',
		'label' => 'Hamburger',
		'id' => 'hamburger-section',
	],
	[
		'type' => 'select',
		'name' => 'super_mobile_settings[animationswitcher]',
		'label' => 'Choose animation switcher',
		'options' => $hamburgersArray,
		'default' => 'hamburger--3dx',
	],
	[
		'type' => 'section',
		'label' => 'Choose Animations',
		'id' => 'animations-section',
	],
	[
		'type' => 'social',
		'name' => 'super_mobile_settings[social]',
		'label' => 'Apply social media in mobile container?',
		'options' => ['facebook','instagram','linkedin','youtube'],
		'default' => 'off',
	],
	[
		'type' => 'section',
		'label' => 'Social Icons',
		'id' => 'social-icons-section',
	],
	[
		'type' => 'iconrepeater',
		'name' => 'super_mobile_settings[icon-left]',
		'label' => 'Choose your icons',
	],
	[
		'type' => 'section',
		'label' => 'Contact Icons',
		'id' => 'contact-icon-section',
	],
	[
		'type' => 'color',
		'label' => 'Choose background color for active item',
		'name' => 'super_mobile_settings[bg-active-color]',
		'default' => '#000',
	],
	[
		'type' => 'color',
		'label' => 'Choose font color',
		'name' => 'super_mobile_settings[font-color]',
		'default' => '#000',
	],
	[
		'type' => 'color',
		'label' => 'Choose active item font color',
		'name' => 'super_mobile_settings[active-font-color]',
		'default' => '#fff',
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
		'type' => 'section',
		'label' => 'Responsive',
		'id' => 'responsive-section',
	],
	// [
	// 	'type' => 'radio',
	// 	'name' => 'super_mobile_settings[cokolwiek]',
	// 	'label' => 'what do you like the most?',
	// 	'options' => ['ciocia agata','oranges','bananas'],
	// 	'default' => '0',
	// ],
	// [
	// 	'type' => 'section',
	// 	'label' => 'Unused custom fields',
	// 	'id' => 'custom-fields-section',
	// ],
	[
		'type' => 'section',
		'label' => 'Import Template',
		'id' => 'import-section',
	],
];