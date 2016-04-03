<?php 
require_once('php/getCode.php');
?>
<!DOCTYPE html>
<head lang="en">
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="author" content="Trever Hillis treverhillis@gmail.com">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css"/>
	<link rel="stylesheet" type="text/css" href="css/source.css"/>
	<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
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
			<svg id="circle-svg" height="100" width="100">
  				<circle cx="50" cy="50" r="40" fill="#1c1c44" />
			</svg>
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
				<label for="subfolder1">treverhillis.com</label>
				<input type="checkbox" id="subfolder1" />
				</br>
				<ol>

					<input type="checkbox" id="subfolder1">
					<label for="subfolder1">php</label>

					<ol class="files1">
						<li><a href="#" onclick="displaySourceCode('index-php');">index.php</a></li>
						<li><a href="#" onclick="displaySourceCode('source-php');">source.php</a></li>
						<li><a href="#" onclick="displaySourceCode('git-json');">gitJson.php</a></li>
						<li><a href="#" onclick="displaySourceCode('git-parse');">gitParse.php</a></li>
						<li><a href="#" onclick="displaySourceCode('git-init');">gitInit.php</a></li>
					</ol>
					</br>
					<input type="checkbox" id="subfolder2">
					<label for="subfolder2">css</label>

					<ol class="files2">
						<li><a href="#" onclick="displaySourceCode('reset-css');">reset.css</a></li>
						<li><a href="#" onclick="displaySourceCode('styles-css');">styles.css</a></li>
						<li><a href="#" onclick="displaySourceCode('source-css');">source.css</a></li>
					</ol>
					</br>
					<input type="checkbox" id="subfolder3">
					<label for="subfolder3">js</label>

					<ol class="files3">
						<li><a href="#" onclick="displaySourceCode('graphs-js');">graphs.js</a></li>
						<li><a href="#" onclick="displaySourceCode('sourcenav-js');">sourcenav.js</a></li>
					</ol>
				</ol>
			</ol>
			<div class="view-source">
				<a class="view-source-link" href="index.php">website</a>
			</div>
		</nav>

		<div class="content-wrapper">
			<header>
				<h1 class="trever-hillis">Trever Hillis</h1>
			</header>
			<hr>

			<article class="portfolio-wrapper" id="code-wrapper">
				<pre style="display: none" id="index-php"><?php echo $indexphp; ?></pre>
				<pre style="display: block" id="source-php"><?php echo $sourcephp; ?></pre>
				<pre style="display: none" id="git-json"><?php echo $gitJson; ?></pre>
				<pre style="display: none" id="git-parse"><?php echo $gitParse; ?></pre>
				<pre style="display: none" id="git-init"><?php echo $gitInit; ?></pre>
				<pre style="display: none" id="reset-css"><?php echo $resetcss; ?></pre>
				<pre style="display: none" id="styles-css"><?php echo $stylescss; ?></pre>
				<pre style="display: none" id="source-css"><?php echo $sourcecss; ?></pre>
				<pre style="display: none" id="graphs-js"><?php echo $graphsjs; ?></pre>
				<pre style="display: none" id="sourcenav-js"><?php echo $sourcenavjs; ?></pre>
			</article>
        </div>



