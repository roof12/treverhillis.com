<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/reset.css?<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="css/refresh2.css?<?php echo time(); ?>"/>
<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
<head>
	<title>Trever Hillis</title>
</head>
<body>
	<div class="page-wrapper">

		<nav class="main-nav" tabindex="0">
			<div class="burger-trigger">
				<svg class="burger">
					<rect x=".5em" y=".5em" height=".6em" width="3.6em" fill="#1c1c44" />
					<rect x=".5em" y="1.7em" height=".6em" width="3.6em" fill="#1c1c44" />
					<rect x=".5em" y="2.9em" height=".6em" width="3.6em" fill="#1c1c44" />
				</svg>
			</div>
			<div class="close-trigger">
				<svg class="close">
					<line x1=".4em" x2="3.3em" y1="4em" y2=".5em" stroke="#FF5C33" stroke-width=".8em" />
					<line x1=".4em" x2="3.3em" y1=".5em" y2="4em" stroke="#FF5C33" stroke-width=".8em" />
				</svg>
			</div>

			<div class="bio-pic">
			<!-- self portrait goes here -->
			</div>
						<input type="checkbox" id="nav-trigger" class="nav-trigger"/>
			<label for="nav-trigger"></label>
			<ul class="nav-links">
				<li><a href="#codecharts">codecharts</a></li>
				<li><a href="#resume">resume</a></li>
				<li><a href="#portfolio">portfolio</a></li>
				<li><a href="#contact">contact</a></li>
			</ul>
			<div class="view-source">
				<a class="view-source-link" href="">view source</a>
			</div>


		</nav>


		<div class="content-wrapper">
			<header>
				<h1 class="trever-hillis">Trever Hillis</h1>
			</header>
			<hr>

			<article id="codecharts" class="portfolio-wrapper">
			<?php
				include_once('gitParse.php');
				echo '
				<script type="text/javascript">

				var today = new Date();

				window.onload = function () {
				    CanvasJS.addColorSet("barColor", ["#efefd0"]);
				    CanvasJS.addColorSet("pieColor", ["#efefd0", "#141434", "#efefd0"]);

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

					var chartpercentOfLanguages = new CanvasJS.Chart("percentOfLanguages", {
						backgroundColor: "#1c1c44",
						colorSet: "pieColor",
						data: [              
						{
							// Change type to "doughnut", "line", "splineArea", etc.
							type: "pie",
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
						colorSet: "barColor",
					    data: [
					    {
					    	type: "line",
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
					
					chartpercentOfLanguages.render();
					chartpercentOfLangues = {};

					chartCommitsOfTheWeek.render();
					chartCommitsOfTheWeek = {};
				
				}
				</script>';

			?>

			<div id="chartWrapper" style="width: 70%; margin: 0 auto;">
				<h3>Lines of Code Written This Week</h3>
				<div id="linesOfCode" style="height: 300px; width: 100%;"></div>
			</div>
			<div id="chartWrapper" style="width: 70%; margin: 0 auto;">
				<h3>Percent of Languages Used</h3>
				<div id="percentOfLanguages" style="height: 300px; width: 100%;"></div>
			</div>
			<div id="chartWrapper" style="width: 70%; margin: 0 auto;">
				<h3>Number of Commits For This Week</h3>
				<div id="commitsOfTheWeek" style="height: 300px; width: 100%;"></div>
			</div>
			</article>

			<article id="resume" class="resume-wrapper">
				<h3>Objective</h3>
				<hr>
					<p>
						As a digital designer, my objective is to create cohesive aesthetic content for brands that accurately suite the target audencies. A thorough understanding of cross platform development will insure all final content will be accessible across the required devices. 
					</p>
				<h3>Summary</h3>
				<hr>
					<p>
						Over the past decade I have gained a mulitude of design experiences ranging from mediums such as photography to graphic and web design/development. I have traditional training from Brooks Institute of Photography, as well as real world experience creating content for magazines, website advertisements, and email media. 
					</p>
				<h3>Work History</h3>
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
							<li>Work in a close team enviornment, dividing tasks, and working in unison to each others strenghts</li>
							<li></li>
						</ul>
					</p>
					<h4 class="work-history-company">Wrights Indian Art</h4>
					<h5 class="work-history-job-title">Photographer/Graphic & Web Designer/Developer</h5>
					<h5 class="work-history-date">October 2013-October 2015</h5>
					<p>
						<ul class="work-history-duties">
							<li>Photography product insuring accurate colors, high amounts of detail, while creating a unified brand look</li>
							<li>Brainstorm, design, and create monthly newsletters to keep loyal customers in the loop of the companys latest products and activity</li>
							<li>Created a new sale type in which increased website activity by 300% on the least productive day of the week</li>
							<li>Managed and designed mulitple nation wide magazine advertisement contracts</li>
							<li>Work with local artists for interviews, portraits, and high quality examples of thier work</li>
							<li>Complete redesign of the website, making it a full modern responsive web application</li>
						</ul>
					</p>
					<h4 class="work-history-company">Freelance Photography</h4>
					<h5 class="work-history-job-title">Photographer</h5>
					<h5 class="work-history-date">February 2011-October 2013</h5>
					<p>
						<ul class="work-history-duties">
							<li>Own and operate small buisness</li>
							<li>Problem solve fitment of modern mechanics with vintage platforms</li>
							<li>Full fabrication of parts from concept designs to operational reality</li>
							<li>High level of attention to detailm, while abiding to strict deadlines</li>
							<li>Work in a close team enviornment, dividing tasks, and working in unison to each others strenghts</li>
						</ul>
					</p>


				<h3>Training</h3>
				<hr>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				<h6 class="references">contact for references</h6>
			</article>
			<article id="portfolio" class="portfolio-wrapper">

			</article>
		</div>
		<footer id="contact" class="contact-footer">
			<p>phone: 505-974-9035</p>
			<p>email: treverhillis@gmail.com</p>		
		</footer>
	</div>
</body>
</html>