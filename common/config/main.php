<?php
return [
	'vendorpath' => dirname(dirname(__dir__)) . '/vendor',
	'components' => [
		'cache' => [
			'class' => 'yii\caching\Filecache',
		],
		'urlmanager' => [
			'enableprettyurl' => true,
			'showscriptname' => false,
		],
	],
];
