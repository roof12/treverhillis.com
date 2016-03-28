<?php 
	$indexphp = htmlspecialchars(file_get_contents("index.php"));
	$sourcephp = htmlspecialchars(file_get_contents("source.php"));
	$gitJson = htmlspecialchars(file_get_contents("php/gitJson.php"));
	$gitParse = htmlspecialchars(file_get_contents("php/gitParse.php"));
	$gitInit = htmlspecialchars(file_get_contents("php/gitInit.php"));
	$resetcss = htmlspecialchars(file_get_contents("css/reset.css"));
	$stylescss = htmlspecialchars(file_get_contents("css/styles.css"));
	$sourcecss = htmlspecialchars(file_get_contents("css/source.css"));
	$graphsjs = htmlspecialchars(file_get_contents("js/graphs.js"));
	$sourcenavjs = htmlspecialchars(file_get_contents("js/sourcenav.js"));
?>