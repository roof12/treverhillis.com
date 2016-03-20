<?php 
require_once('gitInitialize.php');
require_once('commitMiner.php');
header('Content-Type: application/json');

$url = 'https://api.github.com/repos/revertcreations/treverhillis.com/commits';

$jsonResults = gitInitialize($url);


foreach ($jsonResults as $watevs => $cool) {
	$thisCommit = gitInitialize($cool->{'url'});
// 	//$minerCommited = commitMiner($thisCommit);
	
	$gitJson = json_encode($thisCommit, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES);

	$fp = fopen('github.json', 'a');
	fwrite($fp, $gitJson . ',');
	fclose($fp);
}
 
?>