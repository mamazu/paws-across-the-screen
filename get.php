<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

if (file_exists('notification.json')) {
	$content = file_get_contents('notification.json');
	if ($content !== '') {
		file_put_contents('notification.json', '');
		echo '{"shouldStart": true}';
		return;
	}
}

echo '{"shouldStart": false}';