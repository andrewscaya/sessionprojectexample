<?php

$baseConfig['appName'] = 'The LightMVC Framework Skeleton Application';

$baseConfig['routes'] = [
	0 => [
		'GET',
		'/',
		'index',
	],
	1 => [
		'GET',
		'/index[/{action}]',
		'index',
	],
	2 => [
		'GET',
		'/products[/{action}]',
		'product',
	],
	3 => [
		'GET',
		'/products/{action}/[{id:[0-9]+}]',
		'product',
	],
	4 => [
		'POST',
		'/products/{action}',
		'product',
	],
];

$baseConfig['templateManager'] = 'Smarty';

$baseConfig['templates'] = [
	'templateDir' => $baseConfig['BASEDIR'] . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'smarty' . DIRECTORY_SEPARATOR,
	'compileDir' => $baseConfig['BASEDIR'] . DIRECTORY_SEPARATOR . 'templates_c' . DIRECTORY_SEPARATOR,
	'configDir' => $baseConfig['BASEDIR'] . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR,
	'cacheDir' => $baseConfig['BASEDIR'] . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR,
	'caching' => false,
];
