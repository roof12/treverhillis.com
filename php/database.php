<?php 

$DBconnect = mysqli_connect("localhost", "root", "", "treverhillis");

if (!$DBconnect) {
	echo "Error: Unable to connect to MySQL." . PHP_EOL;
	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	exit;
} else {
	echo "Success: A proper connection to MySQL was made! Host information: " . mysqli_get_host_info($DBconnect) . PHP_EOL;
}

?>