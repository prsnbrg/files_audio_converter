function convertermenu() {
	OCA.Files.fileActions.registerAction({
		name: 'viewconverter',
		displayName: t('files_audio_converter', 'Convert'),
		mime: 'audio',
		permissions: OC.PERMISSION_READ,
		icon: OC.imagePath('files_audio_converter', 'convert-icon'),
		actionHandler: function(name) {
			OCA.Files_Audio_Converter._onEditorTrigger(
				name,
				{
					fileList: fileList,
					dir: dir
				}
			);
		}
	});
}

$(document).ready(function () {
	if (typeof OCA !== 'undefined' && typeof OCA.Files !== 'undefined' && typeof OCA.Files.fileActions !== 'undefined') {
		convertermenu();
	}
	return true;
});