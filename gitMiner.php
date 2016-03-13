<?php 
require_once('gitInitialize.php');
require_once('commitMiner.php');

$url = 'https://api.github.com/repos/revertcreations/treverhillis.com/commits?sha=master';

$jsonResults2 = gitInitialize($url);

foreach ($jsonResults2 as $watevs => $cool) {
	$thisCommit = gitInitialize($cool->{'url'});
	$minerCommited = commitMiner($thisCommit);
	var_dump($thisCommit);
}



?>