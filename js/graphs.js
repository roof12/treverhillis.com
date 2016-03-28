var today = new Date();

window.onload = function () {
    CanvasJS.addColorSet("barColor", ["#efefd0", "#800020", "#141434"]);
    CanvasJS.addColorSet("pieColor", ["#efefd0", "#800020", "#141434"]);
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
	
	chartpercentOfLanguages.render();
	chartpercentOfLangues = {};

	chartCommitsOfTheWeek.render();
	chartCommitsOfTheWeek = {};

}