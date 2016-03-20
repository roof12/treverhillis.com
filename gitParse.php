<?php 
header('Content-Type: application/json');
$gitJson = file_get_contents("github.json");
$gitDecode = json_decode($gitJson);

foreach ($gitDecode as $value) {
	foreach ($value as $stats) {
		$getFilesArray = $stats->{'files'};
		// loop through "files": array to retrieve filename, additions, deletions, changes, and patch info
		foreach ($getFilesArray as $getFiles) {

			$filename = $getFiles->{'filename'};
			$additions = $getFiles->{'additions'};
			$deletions = $getFiles->{'deletions'};
			$changes = $getFiles->{'changes'};
			$patchInfo = $getFiles->{'patch'};

			echo "filename: " . $filename . ", additions: " . $additions . ", deletions: " . $deletions . ", changes: " . $changes . "\n";

		}


	}
}
?>