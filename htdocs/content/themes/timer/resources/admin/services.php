<?php

$services = PostType::make('services', 'Services', 'Service')->set([
	'public' => true,
	'supports' => [
		'title',
		'editor',
		'thumbnail'
	]
]);

Metabox::make('Service details', 'services')->set([

	Field::text('service-icon', [
		'title' => 'Paslaugos ikona',
		'default' => 'ion-information',
		'info' => 'Įveskite ikonos kodą iš <a href="http://ionicons.com" target="_blank">ionicons</a>'
	]),

]);