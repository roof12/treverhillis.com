<?php 
require_once('getCode.php');
?>
<!DOCTYPE html>
<head lang="en">
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="author" content="Trever Hillis treverhillis@gmail.com">
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/styles.css"/>
	<link rel="stylesheet" type="text/css" href="../css/source.css"/>
	<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
	<script src="../js/sourcenav.js"></script>
	<title>Trever Hillis</title>
</head>
	<title>Trever Hillis Source</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="page-wrapper">
		<input type="checkbox" id="nav-trigger" class="nav-trigger"/>
		<label for="nav-trigger"></label>
		<div class="nav-trigger-container">
				<img src="logo@2x.png" id="circle-svg" width="158px" height="39px" style="margin:0 auto; padding-top: 1.3em;">
			<svg id="hamburger-svg" width="100px" height="100px" version="1.1" xmlns="http://www.w3.org/2000/svg">
				<line x1=".75em" y1=".75em" x2="4em" y2=".75em" style="stroke: #141434; stroke-width: .75em;"></line>
				<line x1=".75em" y1="1.75em" x2="4em" y2="1.75em" style="stroke: #141434; stroke-width: .75em;"></line>
				<line x1=".75em" y1="2.75em" x2="4em" y2="2.75em" style="stroke: #141434; stroke-width: .75em;"></line>
			</svg>
			<svg id="close-svg" width="100px" height="100px" version="1.1" xmlns="http://www.w3.org/2000/svg">
				<line x1="1em" y1="4em" x2="4em" y2="6em" style="stroke: #141434; stroke-width: .75em;"></line>
				<line x1="1em" y1="6em" x2="4em" y2="4em" style="stroke: #141434; stroke-width: .75em;"></line>
			</svg>
		</div>
		<nav class="main-nav" tabindex="0">

			<ol class="nav-links">
				<label for="subfolder1">holdmyticket</label>
				<input type="checkbox" id="subfolder1" />
				</br>
				<ol>

					<input type="checkbox" id="subfolder1">
					<label for="subfolder1">nodejs</label>

					<ol class="files1">
						<li><a href="#" onclick="displaySourceCode('source-php');">facebookRequest.js</a></li>
					</ol>
				</ol>
			</ol>
			<div class="view-source">
				<a class="view-source-link" href="index.html">website</a>
			</div>
		</nav>

		<div class="content-wrapper">
			<header>
				<h1 class="trever-hillis">Trever Hillis</h1>
			</header>
			<hr>

			<article class="portfolio-wrapper" id="code-wrapper">
				<pre style="display: block" id="source-php"><?php echo $faceboodApiCalljs; ?></pre>
			</article>
        </div>



