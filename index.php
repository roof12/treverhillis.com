<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="author" content="Trever Hillis treverhillis@gmail.com">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css"/>
	<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
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
			<ul class="nav-links">
				<li><a href="#codecharts">codecharts</a></li>
				<li><a href="#resume">resume</a></li>
				<li><a href="#portfolio">portfolio</a></li>
				<li><a href="#contact">contact</a></li>
			</ul>
			<div class="view-source">
				<a class="view-source-link" href="source.php">view source</a>
			</div>
		</nav>

		<div class="content-wrapper">
			<header>
				<h1 class="trever-hillis">Trever Hillis</h1>
			</header>
			<hr/>

			<div id="codecharts" class="nav-trigger-spacer"></div>
			<article class="portfolio-wrapper">
			<?php
				include_once('php/gitParse.php');
				echo '
				<script type="text/javascript">

				var today = new Date();

				window.onload = function () {
				    CanvasJS.addColorSet("barColor", ["#efefd0", "#800020", "#141434"]);
				    CanvasJS.addColorSet("lineColor", ["#800020"]);

					var chartlinesOfCode = new CanvasJS.Chart("linesOfCode", {
						backgroundColor: "#1c1c44",
						colorSet: "barColor",
						data: [              
						{
							// Change type to "doughnut", "line", "splineArea", etc.
							type: "column",
							dataPoints: [
								{ label: "php",  y: '.$linesOfPhp.' },
								{ label: "css", y: '.$linesOfCss.' },
								{ label: "html", y: '.$linesOfHtml.' },
								{ label: "js", y: '.$linesOfJs.' },
								{ label: "other", y: '.$linesOfOther.' }

							]
						}
						]
					});

					var chartCommitsOfTheWeek = new CanvasJS.Chart("commitsOfTheWeek", {
						backgroundColor: "#1c1c44",
						colorSet: "lineColor",
					    data: [
					    {
					    	type: "line",
					    	markerColor: "#efefd0",
					        dataPoints: [
						        { label: "monday", y: '.$mondayCommits.' },
						        { label: "tuesday", y: '.$tuesdayCommits.' },
						        { label: "wednesday", y: '.$wednesdayCommits.' },
						        { label: "thursday", y: '.$thursdayCommits.' },
						        { label: "friday", y: '.$fridayCommits.' },
						        { label: "saturday", y: '.$saturdayCommits.' },
						        { label: "sunday", y: '.$sundayCommits.' },
					        ]
					      }
					      ]
					    });

					chartlinesOfCode.render();
					chartlinesOfCode = {};
					
					chartCommitsOfTheWeek.render();
					chartCommitsOfTheWeek = {};
				
				}
				</script>';

			?>

			<div id="chartWrapper" style="width: 70%; margin: 0 auto;">
				<h3>Lines of Code Written This Month</h3>
				<div id="linesOfCode" style="height: 300px; width: 100%;"></div>
			</div>

			<div id="chartWrapper" style="width: 70%; margin: 0 auto;">
				<h3>Days Commits are Made</h3>
				<div id="commitsOfTheWeek" style="height: 300px; width: 100%;"></div>
			</div>
			</article>

			<div id="resume" class="nav-trigger-spacer"></div>
			<article class="resume-wrapper">
				<h3>Objective</h3>
				<hr>
					<p>
						As a digital designer, my objective is to create cohesive aesthetic content for brands that accurately suite the target audencies. A thorough understanding of cross platform development will insure all final content will be accessible across the required devices. 
					</p>
				<h3>Summary</h3>
				<hr>
					<p>
						Over the past decade I gained a multitude of design experiences ranging from mediums such as photography to graphic and web design. I have traditional training from Brooks Institute of Photography, as well as real world experience creating content for magazines, website advertisements, and email media. Over the past few years my focus has shifted towards the professional advancement in fullstack web development. I oversaw a modern redesign of a large scale online ecommerce web application while maintaining and updating a legacy code base.
					</p>
				<h3>Areas of Knowledge and Skills</h3>
				<hr>
					<p>
						<ul class="work-history-duties">
							<li>Love learning new languages, frameworks, libraries, and design patterns</li>
							<li>Confident in Javascript/JQuery, while experimenting with frameworks such as AngularJS, Node.js</li>
							<li>Writing efficient and semantic HTML</li>
							<li>Experience creating templating patterns in CSS and SASS such as partials, layout extentions, and mixins</li>
							<li>Very comfortable administrating linux servers from the command line</li>
							<li>Obsessed with exploring flavors of linux, spinning up new Vagrant boxes multiple times a week</li>
							<li>Understanding MVC frameworks and concepts, such as Laravel and Django</li>
							<li>Proficiency in git source control system using both Git and Bitbucket</li>
							<li>Use Sublime Text 3, PyCharm, Terminal, Developer Tools, and Adobe Creative Suite daily</li>
							<li>Extreme comfort in Adobe Creative Suite, especially in Photoshop, Illustrator, and InDesign</li>
						</ul>
					</p>
				<h3>Experience</h3>
				<hr>
					<h4 class="work-history-company">Albuquerque Indoor Karting</h4>
					<h5 class="work-history-job-title">Classic Car Restorer</h5>
					<h5 class="work-history-date">October 2015-current</h5>
					<p>
						<ul class="work-history-duties">
							<li>Oversee restoration of classic collector vehicles</li>
							<li>Problem solve fitment of modern mechanics with vintage platforms</li>
							<li>Full fabrication of parts from concept designs to operational reality</li>
							<li>High level of attention to detail, while abiding to strict deadlines</li>
							<li>Work in a close team enviornment, dividing tasks according to each others strenghts</li>
						</ul>
					</p>
					<h4 class="work-history-company">Wrights Indian Art</h4>
					<h5 class="work-history-job-title">Photographer/Graphic & Web Designer/Developer</h5>
					<h5 class="work-history-date">October 2013-October 2015</h5>
					<p>
						<ul class="work-history-duties">
							<li>Completed redesign of the website, making it a full modern responsive web application.</li>
							<li>Devised and instituted an ecommernce weekly flash sale which increased website activity by 300% on the least productive day of the week.</li>
							<li>Managed and designed mulitple nation wide magazine advertisement contracts.</li>
							<li>Photography product insuring accurate colors, high amounts of detail, while creating a unified brand look</li>
						</ul>
					</p>
					<h4 class="work-history-company">Freelance Photography</h4>
					<h5 class="work-history-job-title">Photographer</h5>
					<h5 class="work-history-date">February 2011-October 2013</h5>
					<p>
						<ul class="work-history-duties">
							<li>Singularly operated a small business while maintaining client relationships.</li>
						</ul>
					</p>


				<h3>Freelance Projects</h3>
				<hr>
					<h4 class="work-history-company">What the Sex</h4>
					<h5 class="work-history-job-title">Developer</h5>
					<h5 class="work-history-date">March 2015-September 2015</h5>
					<p>
						<ul class="work-history-duties">
							<li>Consulted on website design, worked with client to bring her design ideas to friction.</li>
							<li>Translated PSD layout into a mobile first design.</li>
							<li>Full fabrication of parts from concept designs to operational reality.</li>
							<li>Created a CMS for creating and managing blogs with Laravel.</li>
							<li>Implemented a user login system with the ability to comment on blog posts</li>
						</ul>
					</p>
				<a class="print-pdf" id="print-pdf" href="printResume.php" target="_blank">print resume</a>
			</article>

			<div id="portfolio" class="nav-trigger-spacer"></div>
			<article class="portfolio-wrapper">
				<a href="http://www.whatthesex.com"><img src="img/whatthesex.png" width="400px"></a>
				<p class="github-links"><a href="http://github.com/revertcreations/whatthesex">github</a></p>
				<a href="http://www.wrightsgallery.com"><img src="img/wrightsgallery.png" width="400px"></a>
				<p class="github-links"><a href="http://github.com/revertcreations/wrightsLaravel">github</a></p>
				<a href="http://wildhumansmusic.com/"><img src="img/wildhumans.png" width="400px"></a>
				<p class="github-links"><a href="https://github.com/RPJarvis/wild_humans">github</a></p>
			</article>
		</div>
		<footer id="contact" class="contact-footer">
			<p>phone: 505-974-9035</p>
			<p>email: treverhillis@gmail.com</p>		
		</footer>
	</div>
</body>
</html>