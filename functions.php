<?php
$filepath = get_stylesheet_directory_uri();
$theme_includes = array(
	//'functions/config.php',
	'functions/customposts.php'
);

foreach ($theme_includes as $file){
	if(!$filepath = locate_template($file)){
		trigger_error(sprintf('Error Locating %s for inclusion', $file), E_USER_ERROR);
	}
	require_once $filepath;
}
unset($file, $filepath);
?>