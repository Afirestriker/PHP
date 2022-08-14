<!-- 
 Date: 2nd July 2022
 Creating Data Visualization charts using amcharts version-3 in Code-Igniter-4
 -->

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Amcharts3 Basic</title>

	<!-- Bootstrap CSS CDN -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<!-- Bootstrap JavaScript Bundle with Popper CDN -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

	<!-- Amcharts3 Script and CSS -->
	<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
	<script src="https://www.amcharts.com/lib/3/serial.js"></script>
	<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
	<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />

</head>

<body class="bg-light">

	<div class="m-4">
		<h6>Amcharts3 charts using Dummy Data</h6>
		<a href="<?= base_url('index.php/Employee_controller/') ?>">Go to: Amchart3 Employee Report-chart using data in DB</a>
	</div>

	<!-- Tab Navbar and Content Begin -->
	<nav class="container my-5">
		<div class="nav nav-tabs">
			<a id="nav-home-tab" class="nav-link active" data-bs-toggle="tab" data-bs-target="#nav-home">Home</a>
			<a id="nav-day-tab" class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-day">Day Reports</a>
			<a id="nav-montly-tab" class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-monthly">Monthly Reports</a>
			<a id="nav-yearly-tab" class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-yearly">Yearly Reports</a>
			<a id="nav-yearly-tab" class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-yearly2">Yearly Reports 2</a>
			<a id="nav-daily-tab" class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-day-data">Day Data</a>
		</div>

		<div class="tab-content border border-top-0 py-4 px-3">
			<!-- Tsb: Home Content -->
			<div id="nav-home" class="tab-pane fade show active ">
				<h5>Home Tab Content</h5>
			</div>

			<!-- Tab: Day Report Content -->
			<div id="nav-day" class="tab-pane fade">
				<h5>Day Reports Tab Content</h5>
				<div class="nav nav-tabs">
					<a id="nav-dayMonth-intab" class="nav-link active" data-bs-toggle="tab" data-bs-target="#nav-dayMonth-tab">In Month</a>
					<a id="nav-dayWeek-intab" class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-dayWeek-tab">In Week</a>
				</div>
				<div class="tab-content">
					<!-- Day Report - In Month tab content -->
					<div id="nav-dayMonth-tab" class="tab-pane fade show active">
						<div id="dayMonth_chartdiv" style="height: 600px; width: 100%;"></div>
					</div>
					<!-- Day Report - In Week tab content -->
					<div id="nav-dayWeek-tab" class="tab-pane fade">
						<div id="dayWeek_chartdiv" style="height: 600px; width: 100%;"></div>
					</div>
				</div>
			</div>

			<!-- Tab: Monthly Report Content -->
			<div id="nav-monthly" class="tab-pane fade">
				<h5>Monthly Reports Tab Content</h5>
				<div id="monthlty_chartdiv" style="height: 600px; width: 100%;"></div>
			</div>

			<!-- Tab: Yearly Report Content -->
			<div id="nav-yearly" class="tab-pane fade">
				<h5>Yearly Reports Tab Content</h5>
				<div id="yearly_chartdiv" style="height: 600px; width: 100%;"></div>
			</div>
			
			<!-- Tab: Yearly Report 2 Content -->
			<div id="nav-yearly2" class="tab-pane fade">
				<h5>Yearly Reports Tab Content</h5>
				<div id="yearly_chart2" style="height: 600px; width: 100%;"></div>
			</div>

			<!-- Tab: Day Data Content -->
			<div id="nav-day-data" class="tab-pane fade">
				<h5>Day Data Tab Cotent</h5>
				<div id="dayData_chartdiv" style="height: 600px; width: 100%"></div>
			</div>
		</div>
	</nav>
	<!-- End: Tab Navbar and Content -->

</body>

</html>



<!--******************************************************************************** 
	Day Reports - In Month Chart JS Script
**************************************-->
<script>
	var chart = AmCharts.makeChart("dayMonth_chartdiv", {
		"hideCredits": true,
		/*This line hide amchart watermark*/
		"type": "serial",
		"addClassNames": true,
		"theme": "none",
		"autoMargins": false,
		"marginLeft": 30,
		"marginRight": 8,
		"marginTop": 10,
		"marginBottom": 26,

		"legend": {
			/*This set legends for charts, as per charts setting*/
			"position": "top",
			"valueAlign": "left",
			"useGraphSettings": true
		},

		"balloon": {
			"adjustBorderColor": false,
			"horizontalPadding": 10,
			"verticalPadding": 8,
			"color": "#000000" /*This color is for chart tooltip text color*/
		},

		"dataProvider": [{
			/*This is array that provides data for chart*/
			"month": "Jul 01, 2022",
			"energy": 25,
			"ins": 21,
			"color": "#74dba8"
		}],

		"valueAxes": [{
			"axisAlpha": 0,
			"position": "left"
		}],

		"startDuration": 0,
		/*This define chart full-load/animation duration in seconds*/

		"graphs": [{
				/*Graph First Parameter: Here we style for bar and its tooltip*/
				"alphaField": "alpha",
				"balloonText": "<span style='font-size:12px;'>[[title]] in [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",
				"fillColorsField": "color",
				/*This assign color to bar and tooltip based on color value specified for each in array*/
				"fillAlphas": 1,
				"title": "Total Energy",
				"type": "column",
				"valueField": "energy",
				"dashLengthField": "dashLengthColumn"
			},
			{
				/*Graph second Parameter: Here we style line and its tooltip*/
				"id": "graph2",
				"balloonText": "<span style='font-size:12px;'>[[title]] in [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",
				"bullet": "round",
				"lineThickness": 3,
				"bulletSize": 9,
				"bulletBorderAlpha": 1,
				"bulletColor": "#FFFFFF",
				"useLineColorForBulletBorder": true,
				"bulletBorderThickness": 1,
				"fillAlphas": 0,
				"lineAlpha": 1,
				"title": "Total Energy",
				"valueField": "energy",
				"dashLengthField": "dashLengthLine"
			},
			{
				/*Graph Third Parameter: Here we style line and its tooltip*/
				"id": "graph3",
				"balloonText": "<span style='font-size:12px;'>[[title]] in [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",
				"bullet": "round",
				"lineThickness": 3,
				"bulletSize": 9,
				"bulletBorderAlpha": 1,
				"bulletColor": "#FFFFFF",
				"useLineColorForBulletBorder": true,
				"bulletBorderThickness": 1,
				"fillAlphas": 0,
				"lineAlpha": 1,
				"title": "Tilted Radiation INS",
				"valueField": "ins",
				"dashLengthField": "dashLengthLine"
			}

		],

		"categoryField": "month",
		/*This is X-axis category or Label*/

		"categoryAxis": {
			"gridPosition": "start",
			"gridAlpha": 0,
			"axisAlpha": 0,
			"tickLength": 0
		},

		/*On Hover shows vertical line that's move with mouse pointer*/
		"chartScrollbar": {},
		"chartCursor": {
			"cursorPosition": "mouse"
		},

		/*This is title for charts*/
		"titles": [{
			"text": "Plant Day Report - In Month",
			"size": 15,
		}],

		/*allLabels is for setting heading label for X-axis and Y-axis*/
		"allLabels": [{
			"text": "",
			"x": "!650",
			"y": "!10",
			"width": "50%",
			"size": 15,
			"bold": true,
			"align": "right"
		}, {
			"text": "Energy (KWh)",
			"rotation": 270,
			"x": "0",
			"y": "250",
			"width": "50%",
			"size": 15,
			"bold": true,
			"align": "right"
		}],

		"export": {
			"enabled": true /*This is chart download/export button feature*/
		}

	});
	/*End: "var chart" initialization*/
</script>
<!--******************************************************************************** 
	End: Day Reports In Month Chart JS Script
**************************************-->



<!--******************************************************************************** 
	Day Reports - In Week Chart JS Script
**************************************-->
<script>
	var chart = AmCharts.makeChart("dayWeek_chartdiv", {
		"hideCredits": true,
		/*This line hide amchart watermark*/
		"type": "serial",
		"addClassNames": true,
		"theme": "none",
		"autoMargins": false,
		"marginLeft": 30,
		"marginRight": 8,
		"marginTop": 10,
		"marginBottom": 26,

		"legend": {
			/*This set legends for charts, as per charts setting*/
			"position": "top",
			"valueAlign": "left",
			"useGraphSettings": true
		},

		"balloon": {
			"adjustBorderColor": false,
			"horizontalPadding": 10,
			"verticalPadding": 8,
			"color": "#000000" /*This color is for chart tooltip text color*/
		},

		"dataProvider": [{
				/*This is array that provides data for chart*/
				"week": "Jun 25 2022",
				"year": 2022,
				"energy": 20,
				"ins": 16,
				"color": "#74dba8"
			},
			{
				"week": "Jun 26 2022",
				"year": 2022,
				"energy": 22,
				"ins": 17,
				"color": "#74dba8"
			},
			{
				"week": "Jun 27 2022",
				"year": 2022,
				"energy": 25,
				"ins": 23,
				"color": "#74dba8"
			},
			{
				"week": "Jun 28 2022",
				"year": 2022,
				"energy": 18,
				"ins": 15,
				"color": "#74dba8"
			},
			{
				"week": "Jun 29 2022",
				"year": 2022,
				"energy": 23,
				"ins": 20,
				"color": "#74dba8"
			},
			{
				"week": "Jun 30 2022",
				"year": 2022,
				"energy": 25,
				"ins": 23,
				"color": "#74dba8"
			},
			{
				"week": "Jul 01 2022",
				"year": 2022,
				"energy": 25,
				"ins": 21,
				"color": "#74dba8"
			}
		],

		"valueAxes": [{
			"axisAlpha": 0,
			"position": "left"
		}],

		"startDuration": 0,
		/*This define chart full-load/animation duration in seconds*/

		"graphs": [{
				/*Graph First Parameter: Here we style for bar and its tooltip*/
				"alphaField": "alpha",
				"balloonText": "<span style='font-size:12px;'>[[title]] in [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",
				"fillColorsField": "color",
				/*This assign color to bar and tooltip based on color value specified for each in array*/
				"fillAlphas": 1,
				"title": "Total Energy",
				"type": "column",
				"valueField": "energy",
				"dashLengthField": "dashLengthColumn"
			},
			{
				/*Graph second Parameter: Here we style line and its tooltip*/
				"id": "graph2",
				"balloonText": "<span style='font-size:12px;'>[[title]] in [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",
				"bullet": "round",
				"lineThickness": 3,
				"bulletSize": 9,
				"bulletBorderAlpha": 1,
				"bulletColor": "#FFFFFF",
				"useLineColorForBulletBorder": true,
				"bulletBorderThickness": 1,
				"fillAlphas": 0,
				"lineAlpha": 1,
				"title": "Total Energy",
				"valueField": "energy",
				"dashLengthField": "dashLengthLine"
			},
			{
				/*Graph Third Parameter: Here we style line and its tooltip*/
				"id": "graph3",
				"balloonText": "<span style='font-size:12px;'>[[title]] in [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",
				"bullet": "round",
				"lineThickness": 3,
				"bulletSize": 9,
				"bulletBorderAlpha": 1,
				"bulletColor": "#FFFFFF",
				"useLineColorForBulletBorder": true,
				"bulletBorderThickness": 1,
				"fillAlphas": 0,
				"lineAlpha": 1,
				"title": "Tilted Radiation INS",
				"valueField": "ins",
				"dashLengthField": "dashLengthLine"
			}

		],

		"categoryField": "week",
		/*This is X-axis category or Label*/

		"categoryAxis": {
			"gridPosition": "start",
			"gridAlpha": 0,
			"axisAlpha": 0,
			"tickLength": 0
		},

		/*On Hover shows vertical line that's move with mouse pointer*/
		"chartScrollbar": {},
		"chartCursor": {
			"cursorPosition": "mouse"
		},

		/*This is title for charts*/
		"titles": [{
			"text": "Plant Day Report - In Week",
			"size": 15,
		}],

		/*allLabels is for setting heading label for X-axis and Y-axis*/
		"allLabels": [{
			"text": "",
			"x": "!650",
			"y": "!10",
			"width": "50%",
			"size": 15,
			"bold": true,
			"align": "right"
		}, {
			"text": "Energy (KWh)",
			"rotation": 270,
			"x": "0",
			"y": "250",
			"width": "50%",
			"size": 15,
			"bold": true,
			"align": "right"
		}],

		"export": {
			"enabled": true /*This is chart download/export button feature*/
		}

	});
	/*End: "var chart" initialization*/
</script>
<!--******************************************************************************** 
	End: Day Reports In Week Chart JS Script
**************************************-->





<!--******************************************************************************** 
	Montly Reports Chart JS Script
**************************************-->
<script>
	var chart = AmCharts.makeChart("monthlty_chartdiv", {
		"hideCredits": true,
		/*This line hide amchart watermark*/
		"type": "serial",
		"addClassNames": true,
		"theme": "none",
		"autoMargins": false,
		"marginLeft": 30,
		"marginRight": 8,
		"marginTop": 10,
		"marginBottom": 26,

		"legend": {
			/*This set legends for charts, as per charts setting*/
			"position": "top",
			"valueAlign": "left",
			"useGraphSettings": true
		},

		"balloon": {
			"adjustBorderColor": false,
			"horizontalPadding": 10,
			"verticalPadding": 8,
			"color": "#000000" /*This color is for chart tooltip text color*/
		},

		"dataProvider": [{
			/*This is array that provides data for chart*/
			"month": "Jan 2022",
			"energy": 23.5,
			"ins": 21.1,
			"tcpr": 21,
			"color": "#74dba8",
			"lineColor": "#000000"
		}, {
			"month": "Feb",
			"energy": 26.2,
			"ins": 30.5,
			"tcpr": 22,
			"color": "#74dba8",
			"lineColor": "#000000"
		}, {
			"month": "Mar",
			"energy": 30.1,
			"ins": 28.9,
			"tcpr": 24,
			"color": "#74dba8",
			"lineColor": "#000000"
		}, {
			"month": "Apr",
			"energy": 29.5,
			"ins": 31.1,
			"tcpr": 25,
			"color": "#74dba8",
			"lineColor": "#000000"
		}, {
			"month": "May",
			"energy": 30.6,
			"ins": 28.2,
			"tcpr": 25,
			"dashLengthLine": 5,
			"color": "#74dba8",
			"lineColor": "#000000"
		}, {
			"month": "Jun",
			"energy": 32.1,
			"ins": 30.9,
			"tcpr": 26,
			"dashLengthColumn": 5,
			"alpha": 0.2,
			"additional": "(projection)",
			"color": "#74dba8",
			"lineColor": "#000000"
		}],

		"valueAxes": [{
			"axisAlpha": 0,
			"position": "left"
		}],

		"startDuration": 0,
		/*This define chart full-load/animation duration in seconds*/

		"graphs": [{
				/*Graph First Parameter: Here we style bar and its tooltip*/
				"alphaField": "alpha",
				"balloonText": "<span style='font-size:12px;'>[[title]] in [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",
				/* Fill color for bar chart */
				"fillColorsField": "color",
				/* Border color for  bar chart */
				"lineColorField": "lineColor",
				/*This assign color to bar and tooltip based on color value specified for each in array*/
				"fillAlphas": 1,
				"title": "Total Energy",
				"type": "column",
				"valueField": "energy",
				"legendColor": "lineColor",
				"dashLengthField": "dashLengthColumn"
			},
			{
				/*Graph second Parameter: Here we style line and its tooltip*/
				"id": "graph2",
				"balloonText": "<span style='font-size:12px;'>[[title]] in [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",
				"bullet": "round",
				"lineThickness": 3,
				"bulletSize": 9,
				"bulletBorderAlpha": 1,
				"bulletColor": "#FFFFFF",
				"useLineColorForBulletBorder": true,
				"bulletBorderThickness": 1,
				"fillAlphas": 0,
				"lineAlpha": 1,
				"title": "Total Energy",
				"valueField": "energy",
				"dashLengthField": "dashLengthLine"
			},
			{
				/*Graph Third Parameter: Here we style line and its tooltip*/
				"id": "graph3",
				"balloonText": "<span style='font-size:12px;'>[[title]] in [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",
				"bullet": "round",
				"lineThickness": 3,
				"bulletSize": 9,
				"bulletBorderAlpha": 1,
				"bulletColor": "#FFFFFF",
				"useLineColorForBulletBorder": true,
				"bulletBorderThickness": 1,
				"fillAlphas": 0,
				"lineAlpha": 1,
				"title": "Tilted Radiation INS",
				"valueField": "ins",
				"dashLengthField": "dashLengthLine"
			},
			{
				/*Graph Fourth Parameter: Here we style line and its tooltip*/
				"id": "graph4",
				"balloonText": "<span style='font-size:12px;'>[[title]] in [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",
				"bullet": "round",
				"lineThickness": 3,
				"bulletSize": 9,
				"bulletBorderAlpha": 1,
				"bulletColor": "#FFFFFF",
				"useLineColorForBulletBorder": true,
				"bulletBorderThickness": 1,
				"fillAlphas": 0,
				"lineAlpha": 1,
				"title": "TC PR",
				"valueField": "tcpr",
				"dashLengthField": "dashLengthLine"
			}
		],

		"categoryField": "month",
		/*This is X-axis category or Label*/

		"categoryAxis": {
			"gridPosition": "start",
			"axisAlpha": 0,
			"tickLength": 0
		},

		/*On Hover shows vertical line that's move with mouse pointer*/
		"chartScrollbar": {},
		"chartCursor": {
			"cursorPosition": "mouse"
		},

		/*This is title for charts*/
		"titles": [{
			"text": "Plant Monthy Report",
			"size": 15,
		}],

		/*allLabels is for setting heading label for X-axis and Y-axis*/
		"allLabels": [{
			"text": "",
			"x": "!650",
			"y": "!10",
			"width": "50%",
			"size": 15,
			"bold": true,
			"align": "right"
		}, {
			"text": "Energy (KWh)",
			"rotation": 270,
			"x": "0",
			"y": "250",
			"width": "50%",
			"size": 15,
			"bold": true,
			"align": "right"
		}],

		"export": {
			"enabled": true /*This is chart download/export button feature*/
		}

	});
	/*End: "var chart" initialization*/
</script>
<!--******************************************************************************** 
	End: Montly Reports Chart JS Script
**************************************-->



<!--******************************************************************************** 
	Yearly Report Chart JS Script 
**************************************-->
<script>
	var chart = AmCharts.makeChart("yearly_chartdiv", {
		"hideCredits": true,
		/*This line hide amchart watermark*/
		"type": "serial",
		"addClassNames": true,
		"theme": "light",
		"autoMargins": false,
		"marginLeft": 30,
		"marginRight": 8,
		"marginTop": 10,
		"marginBottom": 26,

		"legend": {
			/*This set legends for charts, as per charts setting*/
			"position": "top",
			"valueAlign": "left",
			"useGraphSettings": true
		},

		"balloon": {
			"adjustBorderColor": false,
			"horizontalPadding": 10,
			"verticalPadding": 8,
			"color": "#000000" /*This color is for chart tooltip text color*/
		},

		"dataProvider": [{
			/*This is array that provides data for chart*/
			"year": 2021,
			"energy": 25,
			"ins": 26,
			"tcpr": 21,
			"color": "#74dba8"
		}, {
			"year": 2022,
			"energy": 26,
			"ins": 23,
			"tcpr": 25,
			"color": "#74dba8"
		}],

		"valueAxes": [{
			"axisAlpha": 0,
			"position": "left"
		}],

		"startDuration": 0,
		/*This define chart full-load/animation duration in seconds*/

		"graphs": [{
				/*Bar chart: Graph First Parameter: Here we style for bar and its tooltip*/
				"alphaField": "alpha",
				"balloonText": "<span style='font-size:12px;'>[[title]] in [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",
				"fillColorsField": "color",
				/*This assign color to bar and tooltip based on color value specified for each in array*/
				"fillAlphas": 1,
				"title": "Total Energy",
				"type": "column",
				"valueField": "energy",
				"dashLengthField": "dashLengthColumn"
			},
			/* second bar chart */
			{
				/*Line chart 2: Graph second Parameter: Here we style line and its tooltip*/
				"id": "graph1",
				"balloonText": "<span style='font-size:12px;'>[[title]] in [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",
				"bullet": "round",
				"lineThickness": 3,
				"bulletSize": 9,
				"bulletBorderAlpha": 1,
				"bulletColor": "#FFFFFF",
				"useLineColorForBulletBorder": true,
				"bulletBorderThickness": 1,
				"fillAlphas": 0,
				"lineAlpha": 1,
				"title": "Total Energy",
				"valueField": "energy",
				"dashLengthField": "dashLengthLine"
			},
			{
				/*Line chart 3: Graph Third Parameter: Here we style line and its tooltip*/
				"id": "graph2",
				"balloonText": "<span style='font-size:12px;'>[[title]] in [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",
				"bullet": "round",
				"lineThickness": 3,
				"bulletSize": 9,
				"bulletBorderAlpha": 1,
				"bulletColor": "#FFFFFF",
				"useLineColorForBulletBorder": true,
				"bulletBorderThickness": 1,
				"fillAlphas": 0,
				"lineAlpha": 1,
				"title": "Tilted Radiation INS",
				"valueField": "ins",
				"dashLengthField": "dashLengthLine"
			},
			{
				/* Line chart 4: Graph Third Parameter: Here we style line and its tooltip*/
				"id": "graph3",
				"balloonText": "<span style='font-size:12px;'>[[title]] in [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",
				"bullet": "round",
				"lineThickness": 3,
				"bulletSize": 9,
				"bulletBorderAlpha": 1,
				"bulletColor": "#FFFFFF",
				"useLineColorForBulletBorder": true,
				"bulletBorderThickness": 1,
				"fillAlphas": 0,
				"lineAlpha": 1,
				"title": "TC PR",
				"valueField": "tcpr",
				"dashLengthField": "dashLengthLine"
			}

		],

		"categoryField": "year",
		/*This is X-axis category or Label*/

		"categoryAxis": {
			"gridPosition": "start",
			"gridAlpha": 0,
			"axisAlpha": 0,
			"tickLength": 0
		},

		/*On Hover shows vertical line that's move with mouse pointer*/
		"chartScrollbar": {},
		"chartCursor": {
			"cursorPosition": "mouse"
		},

		/*This is title for this chart*/
		"titles": [{
			"text": "Plant Yearly Report",
			"size": 15,
		}],

		/*allLabels is for setting heading label for X-axis and Y-axis*/
		"allLabels": [{
			"text": "",
			"x": "!650",
			"y": "!10",
			"width": "50%",
			"size": 15,
			"bold": true,
			"align": "right"
		}, {
			"text": "Energy (KWh)",
			"rotation": 270,
			"x": "0",
			"y": "250",
			"width": "50%",
			"size": 15,
			"bold": true,
			"align": "right"
		}],

		"export": {
			"enabled": true /*This is chart download/export button feature*/
		}

	});
	/*End: "var chart" initialization*/
</script>
<!--******************************************************************************** 
	End: Yearly Report Chart JS Script 
**************************************-->


<!--******************************************************************************** 
	Day Data Line-Chart JS Script 
**************************************-->
<script>
	var chartData = generateChartData();

	var chart = AmCharts.makeChart("dayData_chartdiv", {
		"hideCredits": true,
		/*This line hide amchart watermark*/
		"type": "serial",
		"theme": "none",

		/*This is title for this chart*/
		"titles": [{
			"text": "Day Data Report",
			"size": 15,
		}],

		"legend": {
			"position": "top",
			"useGraphSettings": true
		},

		"dataProvider": chartData,
		"synchronizeGrid": true,

		/*This valueAxes -> means settings for y-axis*/
		"valueAxes": [{
			"id": "v1",
			"axisColor": "#FF6600",
			"axisThickness": 2,
			"axisAlpha": 1,
			"position": "left"
		}, {
			"id": "v2",
			"axisColor": "#FCD202",
			"axisThickness": 2,
			"axisAlpha": 1,
			"position": "right"
		}, {
			"id": "v3",
			"axisColor": "#B0DE09",
			"axisThickness": 2,
			"gridAlpha": 0,
			"offset": 50,
			"axisAlpha": 1,
			"position": "left"
		}],

		"startDuration": 0,
		/*This define chart full-load/animation duration in seconds*/

		/*This graphs -> means for designing lines*/
		"graphs": [{
			"valueAxis": "v1",
			"lineColor": "#FF6600",
			"title": "Total Energy",
			"valueField": "visits",
			"fillAlphas": 0
		}, {
			"valueAxis": "v2",
			"lineColor": "#FCD202",
			"title": "Tilted Radiation",
			"valueField": "hits",
			"fillAlphas": 0.3 /*This fill up color, from line to bottom*/
		}, {
			"valueAxis": "v3",
			"lineColor": "#B0DE09",
			"title": "TC PR",
			"valueField": "views",
			"fillAlphas": 0.3 /*This fill up color, from line to bottom*/
		}],


		/*On Hover shows vertical line that's move with mouse pointer*/
		"chartScrollbar": {},
		"chartCursor": {
			"cursorPosition": "mouse"
		},

		"categoryField": "date",

		"categoryAxis": {
			"parseDates": true,
			"axisColor": "#DADADA",
			"minorGridEnabled": true
		},

		"export": {
			"enabled": true,
			"position": "top-right"
		}

	});
	/*End: Var chart*/

	chart.addListener("dataUpdated", zoomChart);
	zoomChart();


	// generate some random data, quite different range
	function generateChartData() {
		var chartData = [];
		// current date
		var firstDate = new Date();
		// now set 500 minutes back
		firstDate.setDate(firstDate.getDate() - 1000);

		var visits = 1600;
		var hits = 2900;
		var views = 8700;

		// generate 500 data items
		for (var i = 0; i < 500; i++) {
			var newDate = new Date(firstDate);
			// each time we add one minute
			newDate.setDate(newDate.getDate() + i);

			// some random number
			visits += Math.round((Math.random() < 0.5 ? 1 : -1) * Math.random() * 10);
			hits += Math.round((Math.random() < 0.5 ? 1 : -1) * Math.random() * 10);
			views += Math.round((Math.random() < 0.5 ? 1 : -1) * Math.random() * 10);

			// add data item to the array
			chartData.push({
				date: newDate,
				visits: visits,
				hits: hits,
				views: views
			});
		}
		return chartData;
	}
	/*Close: generateChartData() */

	function zoomChart() {
		chart.zoomToIndexes(chart.dataProvider.length - 20, chart.dataProvider.length - 1);
	}
</script>
<!--******************************************************************************** 
	End: Day Data Line-Chart JS Script 
**************************************-->



<!--******************************************************************************** 
	Start: New Year Chart with nested bar chart 
**************************************-->
<script>
	var chart = AmCharts.makeChart("yearly_chart2", {

	"hideCredits": true,

	"type": "serial",
	
	"theme": "none",
    
	"legend": {
        "autoMargins": false,
        "borderAlpha": 0.2,
        "equalWidths": false,
        "horizontalGap": 10,
        "markerSize": 10,
        "useGraphSettings": true,
        "valueAlign": "left",
        "valueWidth": 0
    },
    

	"dataProvider": [{
			/*This is array that provides data for chart*/
			"year": 2021,
			"energy": 25,
			"blockEnergy": 50,
			"unmonitoredEnergy": 60,
			"ins": 26,
			"tcpr": 21,
			"color_totalEnergy": "#308259",
			"color_blockEnergy": "#bccc2d",
			"color_unmonitoredEnergy": "#4a4ca8"
		}, {
			"year": 2022,
			"energy": 26,
			"blockEnergy": 70,
			"unmonitoredEnergy": 50,
			"ins": 23,
			"tcpr": 25,
			"color_totalEnergy": "#308259",
			"color_blockEnergy": "#bccc2d",
			"color_unmonitoredEnergy": "#4a4ca8"
		}],    
	
	"valueAxes": [{
        "stackType": "100%",
        "axisAlpha": 0,
        "gridAlpha": 0,
        "labelsEnabled": false,
        "position": "left"
    }],


    "graphs": [{
		/* Bar chart: Total Energy */
        "balloonText": "[[title]], [[category]]<br><span style='font-size:14px;'><b>[[value]]</b> ([[percents]]%)</span>",
        "fillAlphas": 0.9,
		"fillColorsField": "color_totalEnergy",
        "fontSize": 11,
        "lineAlpha": 0.5,
        "title": "Total Energy",
        "type": "column",

        "valueField": "energy"
    }, {
		/* Bar chart:  Block Energy */
        "balloonText": "[[title]], [[category]]<br><span style='font-size:14px;'><b>[[value]]</b> ([[percents]]%)</span>",
        "fillAlphas": 0.9,
		"fillColorsField": "color_blockEnergy",
        "fontSize": 11,
        "lineAlpha": 0.5,
        "title": "Block Energy",
        "type": "column",
        "valueField": "blockEnergy"
    }, 
	{
		/* Bar chart: Unmonitored Energy */
        "balloonText": "[[title]], [[category]]<br><span style='font-size:14px;'><b>[[value]]</b> ([[percents]]%)</span>",
        "fillAlphas": 0.2,
		"fillColorsField": "color_unmonitoredEnergy",
        "fontSize": 11,
        "lineAlpha": 0.5,
        "title": "Unmonitored Energy",
        "type": "column",
        "valueField": "unmonitoredEnergy"
    },
	{
		/* Smooth Line 1: */
        "id":"g1",
        "balloonText": "[[title]], [[category]]<br><span style='font-size:14px;'><b>[[value]]</b> ([[percents]]%)</span>",
        "bullet": "round",
        "bulletSize": 8,
        "lineColor": "#d1655d",
        "lineThickness": 2,
        "negativeLineColor": "#637bb6",
		"title": "Total Energy",
        "type": "smoothedLine",
        "valueField": "energy"
    },
	{
		/* Smooth Line 2: */
        "id":"g2",
        "balloonText": "[[title]], [[category]]<br><span style='font-size:14px;'><b>[[value]]</b> ([[percents]]%)</span>",
        "bullet": "round",
        "bulletSize": 8,
        "lineColor": "#3d289e",
        "lineThickness": 2,
        "negativeLineColor": "#817aa1",
		"title": "Block Energy",
        "type": "smoothedLine",
        "valueField": "blockEnergy"
    },
	{
		/* Smooth Line 2: */
        "id":"g3",
        "balloonText": "[[title]], [[category]]<br><span style='font-size:14px;'><b>[[value]]</b> ([[percents]]%)</span>",
        "bullet": "round",
        "bulletSize": 8,
        "lineColor": "#3d289e",
        "lineThickness": 2,
        "negativeLineColor": "#817aa1",
		"title": "Unmonitored Energy",
        "type": "smoothedLine",
        "valueField": "unmonitoredEnergy"
    }
	],


    "marginTop": 30,
    
	"marginRight": 0,
    
	"marginLeft": 0,
    
	"marginBottom": 40,
    
	"autoMargins": false,
    
	"categoryField": "year",
    
	"categoryAxis": {
        "gridPosition": "start",
        "axisAlpha": 0,
        "gridAlpha": 0
    },
    
	"export": {
    	"enabled": true
     }

});
</script>


