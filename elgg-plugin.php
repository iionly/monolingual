<?php

return [
	'events' => [
		'login:after' => [
			'user' => [
				"\MonolingualEvents::monolingual_set_user_language" => [],
			],
		],
	],
];