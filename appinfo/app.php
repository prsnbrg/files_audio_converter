<?php
namespace OCA\FilesAudioConverter\AppInfo;

use OCP\Util;

\OC::$server->getEventDispatcher()->addListener(
	'OCA\Files::loadAdditionalScripts',
	function() {
		Util::addScript('files_audio_converter', 'converter');
	}
);
