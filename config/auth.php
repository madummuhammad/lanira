<?php

return [
	'defaults' => [
		'guard' => 'users',
		'passwords' => 'users',
	],

	'guards' => [
		'users' => [
			'driver' => 'session',
			'provider' => 'users',
		],
	],
	'providers' => [
		'users' => [
			'driver' => 'eloquent',
			'model' => App\Models\Member::class,
		],
	],
	'passwords' => [
		'users' => [
			'provider' => 'users',
			'table' => 'password_resets',
			'expire' => 60,
			'throttle' => 60,
		],
	],
];
