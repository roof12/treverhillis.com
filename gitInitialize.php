<?php 

function gitInitialize($url) {
	$chData = array('User-Agent: curl/7.47.1','X-RateLimit-Limit: 4000');
	$ch = curl_init($url);

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $chData);
	curl_setopt($ch, CURLOPT_VERBOSE, true);

	$results = curl_exec($ch);
	$jsonResults = json_decode($results);

	curl_close($ch);

	return $jsonResults;
}
?>