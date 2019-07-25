<?php
namespace OCA\FilesAudioConverter\AppInfo;

use \OCP\AppFramework\App;
use \OCA\FilesAudioConverter\Controller\ViewController;

class Application extends App {
	public function __construct(array $urlParams=[]){
		parent::__construct('files_audio_converter', $urlParams);

		$container = $this->getContainer();

	}
}