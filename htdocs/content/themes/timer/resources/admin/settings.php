<?php

$page = Page::make('theme-settings', 'Template settings')->set([
	'capability' => 'manage_options',
	'tabs' => false
]);

$sections[] = Section::make('section-settings', 'General settings');

$settings['section-settings'] = [
	Field::textarea('google-analytics', ['title' => 'Jūsų GA kodas', 'info' => 'Nukopijuokite visą kodą įskaitant SCRIPT žymas']),

	Field::infinite('social-networks', [
		Field::text('url', ['title' => 'URL']),
		Field::text('icon', ['title' => 'Icon (ionicons)']),
	])	
];

$page->addSections($sections);

$page->addSettings($settings);