<?php 
require_once('gitInit.php');
//header('Content-Type: application/json');

$url = 'https://api.github.com/repos/revertcreations/treverhillis.com/commits';
$jsonResults = gitInitialize($url);

$fp = fopen('github.json', 'w');

fwrite($fp, '{"commits": ['.PHP_EOL);
fclose($fp);

foreach ($jsonResults as $watevs => $cool) {
	$thisCommit = gitInitialize($cool->{'url'});
	
	$gitJson = json_encode($thisCommit, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES);

	$fp = fopen('github.json', 'a');

	fwrite($fp, $gitJson.',');
	fclose($fp);
}

$fp = fopen('github.json', 'a');

fwrite($fp, PHP_EOL.']}');
fclose($fp);