<?php
namespace OCA\FilesAudioConverter\AppInfo;

$application = new Application();
$application->registerRoutes(
	$this,
	['routes' => [
			[
				'name' => 'ConvertController#convertHere',
				'url'  => 'ajax/convertHere.php',
            	'verb' => 'POST'
			],
		]
	]
);
