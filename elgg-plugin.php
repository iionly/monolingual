<?php
	
return [
	'plugin' => [
		'name' => 'Monolingual',
		'version' => '4.0.0',
	],
	'events' => [
		'login:after' => [
			'user' => [
				"\MonolingualEvents::monolingual_set_user_language" => [],
			],
		],
	],
];