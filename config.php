<?php
	session_start();

	require_once "Facebook/autoload.php";

	$FB = new \Facebook\Facebook([
		'app_id' => '161094707930326',
		'app_secret' => '327a79cd780b0a56d5e1f686a97305bd',
		'default_graph_version' => 'v2.12'
	]);

	$helper = $FB->getRedirectLoginHelper();
?>