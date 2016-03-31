<?php 
require_once('php/getCode.php');
?>
	

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/reset.css?<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="css/styles.css?<?php echo time(); ?>"/>
<link rel="stylesheet" type="text/css" href="css/source.css?<?php echo time(); ?>"/>

<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="js/sourcenav.js"></script>

<head>
	<title>Trever Hillis</title>
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
				<line x1="1em" y1="2em" x2="6em" y2="2em" style="stroke: #141434; stroke-width: 1.2em;"></line>
				<line x1="1em" y1="3.7em" x2="6em" y2="3.7em" style="stroke: #141434; stroke-width: 1.2em;"></line>
				<line x1="1em" y1="5.4em" x2="6em" y2="5.4em" style="stroke: #141434; stroke-width: 1.2em;"></line>
			</svg>
			<svg id="close-svg" width="100px" height="100px" version="1.1" xmlns="http://www.w3.org/2000/svg">
				<line x1="1em" y1="2em" x2="6em" y2="5.4em" style="stroke: #141434; stroke-width: 1.2em;"></line>
				<line x1="1em" y1="5.4em" x2="6em" y2="2em" style="stroke: #141434; stroke-width: 1.2em;"></line>
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



