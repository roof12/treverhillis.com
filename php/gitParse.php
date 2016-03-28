<?php

$gitJson = file_get_contents("github.json");
$gitDecode = json_decode($gitJson);
$linesOfPhp = 0;
$linesOfCss = 0;
$linesOfHtml = 0;
$linesOfJs = 0;
$linesOfOther = 0;

$weekAgo = strtotime("-3 week");

$commitsOfTheWeek = array();

$mondayCommits = 0;
$tuesdayCommits = 0;
$wednesdayCommits = 0;
$thursdayCommits = 0;
$fridayCommits = 0;
$saturdayCommits = 0;
$sundayCommits = 0;

foreach ($gitDecode as $value) {
	foreach ($value as $stats) {
		$getFilesArray = $stats->{'files'};
		$getCommitArray = $stats->{'commit'};
		$getAuthorArray = $getCommitArray->{'author'};

		// loop through "author": array to retieve commits within week date range & add commitTimestamp to commits of the week array.
		foreach($getAuthorArray as $key => $value) {
			if (strpos($key, 'date') !== false) {
				$commitTimestamp = strtotime($value);
				//echo $commitTimestamp . "<br><br>";
				if($commitTimestamp >= $weekAgo) {
					array_push($commitsOfTheWeek, $commitTimestamp);
				}
				foreach ($commitsOfTheWeek as $dayTimestamp) {
					$day = date('N', $dayTimestamp);
					//var_dump($day);
					switch ($day) {
						case 1:
							$mondayCommits += 1;
							break;
						case 2:
							$tuesdayCommits += 1;
							break;
						case 3:
							$wednesdayCommits += 1;
							break;
						case 4:
							$thursdayCommits += 1;
							break;
						case 5:
							$fridayCommits += 1;
							break;
						case 6:
							$saturdayCommits += 1;
							break;
						case 7:
							$sundayCommits += 1;
							break;

						default:
							echo "what happened here??";
							break;
					}
				}
			}
		}

		// loop through "files": array to retrieve filename, additions, deletions, changes, and patch info
		foreach ($getFilesArray as $getFiles) {
			$filename = $getFiles->{'filename'};
			$additions = $getFiles->{'additions'};
			$deletions = $getFiles->{'deletions'};
			$changes = $getFiles->{'changes'};

			// didnt initially ignore canvasjs, img folder, and the .json file in my git repo. These were dramatically skewing data
			$gitIgnore = array(
				'github.json',
				'source/canvasjs.js',
				'source/excanvas.js',
				'source/jquery.canvasjs.js',
				'canvasjs/canvasjs.min.js',
				'canvasjs/jquery.canvasjs.min.js',
				'backup.json'
			);

			//check to make sure gitIgnore isnt represented in data
			if (!in_array($filename, $gitIgnore)) {

			//check for file extention for languages of lines of code written this week (probably make in to case/switch???)
				if (strpos($filename, 'php') !== false) {
					$linesOfPhp += $additions;
					//echo "php: " . $linesOfPhp . "\n";
				} elseif(strpos($filename, 'css') !== false) {
					$linesOfCss += $additions;
					//echo "css: " . $linesOfCss . "\n";
				} elseif(strpos($filename, 'html') !== false) {
					$linesOfHtml += $additions;
					//echo "html: " . $linesOfHtml . "\n";
				} elseif(strpos($filename, 'js') !== false) {
					$linesOfJs += $additions;
				} else {
					$linesOfOther += $additions;
				}
			}
		}
	}
}
