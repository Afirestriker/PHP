<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Tabulator - Dummy Reports</title>

    <!-- BootStraph CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Tabulator CDN -->
    <link href="https://unpkg.com/tabulator-tables/dist/css/tabulator.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://unpkg.com/tabulator-tables/dist/js/tabulator.min.js"></script>


</head>
<body>

    <div class="m-4">
		<h6>Tabulator using Dummy Data</h6>
                <a href="<?= base_url('index.php/TabulatorRealData_controller/realDataReport') ?>">Go to: Tabulator - Real Data Report</a>
	</div>

    <!-- Container: for Nav-tabs and tab-content -->
    <nav class="container my-5">
        <div class="nav nav-tabs">
            <!-- Day Report Nav-tab -->
            <a id="nav-dayReports-tab" class="nav-link active" data-bs-toggle="tab" data-bs-target="#nav-dayReports">Day Reports</a>
			<!-- Month Report Nav-tab -->
            <a id="nav-monthReports-tab" class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-monthReports">Month Reports</a>
			<!-- Year Report Nav-tab -->
            <a id="nav-yearReports-tab" class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-yearReports">Year Reports</a>
			<!-- Day Data Nav-tab -->
            <a id="nav-dayData-tab" class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-dayData">Day Data</a>
        </div>

        <div class="tab-content border border-top-0 py-4 px-3">
			<!-- Tab: Day Reports Content -->
			<div id="nav-dayReports" class="tab-pane fade show active ">
				<h5 class="mb-4">Day Reports Content</h5>
                <div id="tabulator_dayReports"> <!-- here tabulator for dayReports will load - define below --> </div>
			</div>
            <!-- Tab: Month Reports Content -->
			<div id="nav-monthReports" class="tab-pane fade ">
				<h5 class="mb-4">Month Reports Content</h5>
                <div id="tabulator_monthReports"> <!-- here tabulator for monthReports will load - define below --> </div>
			</div>
            <!-- Tab: Year Reports Content -->
			<div id="nav-yearReports" class="tab-pane fade ">
				<h5 class="mb-4">Year Reports Content</h5>
                <div id="tabulator_yearReports">  <!-- here tabulator for yearReports will load - define below -->  </div>
			</div>
            <!-- Tab: Day-Data Reports Content -->
			<div id="nav-dayData" class="tab-pane fade ">
				<h5 class="mb-4">Day Data Content</h5>
                <div id="tabulator_dayData"> <!-- here tabulator for day-data reports will load - define below --> </div>
			</div>
        </div>
      </nav>


</body>
</html>

<!-- Begin: Day Report Data -->
<script>
    /* This is array, which store data, that will be pass to tabulator */
    var dayReportData = [
        {
            si: 1,
            date: "11/01/2021",
            plantDayGen: 4.27,
            totalGen: 61992.53,
            tiltedRadiation: 0.00,
            cuf: 0.00
        },
        {
            si: 2,
            date: "12/01/2021",
            plantDayGen: 2399.81,
            totalGen: 64392.34,
            tiltedRadiation: 0.00,
            cuf: 2.20
        },
        {
            si: 3,
            date: "13/01/2021",
            plantDayGen: 2399.81,
            totalGen: 64392.34,
            tiltedRadiation: 0.00,
            cuf: 2.20
        },
    ];


    /* Here, we define the tabulator structure and passing dayReportData array as an data to the tabulator     */
    var table = new Tabulator("#tabulator_dayReports", {

        data: dayReportData,    /* here we are assigning data to tabulator, which is stored in dayReportData array defined above */
        addRowPos: "top",

        layout:"fitDataStretch",

        pagination: "true",
        paginationSize: 18,
        paginationCounter: "rows",

        frozenRows:1,

        columns: [
            {
                // Col-1
                title : "SI",
                field : "si",
                sorter : "number",
                minWidth : "250",
                hozAlign : "center",
                headerHozAlign : "center",

            },
            {
                // Col-2
                title : "Date",
                field : "date",
                minWidth : "300",
                
                hozAlign : "center",
                headerHozAlign : "center",
                
                headerFilter:"date",
                headerFilterPlaceholder:"Date"
            },
            {
                // Col-3
                title : "Plant Day Gen (KWh)",
                field : "plantDayGen",
                minWidth : "250",

                bottomCalc:"sum",
                bottomCalcParams:{
                    precision:2
                },

                hozAlign : "center",
                headerHozAlign : "center"
            },
            {
                // Col-4
                title : "Total Gen (KWh)",
                field : "totalGen",
                minWidth : "250",
                hozAlign : "center",
                headerHozAlign : "center"
            },
            {
                // Col-5
                title : "Tilted Radiation-PR (%)",
                field : "tiltedRadiation",
                minWidth : "250",
                hozAlign : "center",
                headerHozAlign : "center"
            },
            {
                // Col-6
                title : "CUF (%)",
                field : "cuf",
                minWidth : "250",
                hozAlign : "center",
                headerHozAlign : "center"
            },
        ]

    });
</script>
<!-- Ends: Day Report Data -->

<!-- Begin: Month Report Data -->
<script>
    var monthReportData = [
        {
            si: 1,
            month: "Jan-2021",
            plantMonthGen: 4.27,
            totalGen: 61992.53,
            tiltedRadiation: 0.00,
            cuf: 0.00
        },
        {
            si: 2,
            month: "Feb-2021",
            plantMonthGen: 2399.81,
            totalGen: 64392.34,
            tiltedRadiation: 0.00,
            cuf: 2.20
        },
        {
            si: 3,
            month: "Mar-2021",
            plantMonthGen: 2399.81,
            totalGen: 64392.34,
            tiltedRadiation: 0.00,
            cuf: 2.20
        },
    ];

    var table = new Tabulator("#tabulator_monthReports", {

        data: monthReportData,
        addRowPos: "top",

        layout:"fitDataStretch",

        pagination: "true",
        paginationSize: 18,
        paginationCounter: "rows",

        frozenRows:1,

        columns: [
            {
                // Col-1
                title : "SI",
                field : "si",
                sorter : "number",
                minWidth : "250",
                hozAlign : "center",
                headerHozAlign : "center"
            },
            {
                // Col-2
                title : "Month",
                field : "month",
                minWidth : "300",
                
                hozAlign : "center",
                headerHozAlign : "center",
                
                headerFilter:"input",
                headerFilterPlaceholder:"Month"
            },
            {
                // Col-3
                title : "Plant Month Gen (KWh)",
                field : "plantMonthGen",
                minWidth : "250",

                bottomCalc:"sum",
                bottomCalcParams:{
                    precision:2
                },

                hozAlign : "center",
                headerHozAlign : "center"
            },
            {
                // Col-4
                title : "Total Gen (KWh)",
                field : "totalGen",
                minWidth : "250",
                hozAlign : "center",
                headerHozAlign : "center"
            },
            {
                // Col-5
                title : "Tilted Radiation-PR (%)",
                field : "tiltedRadiation",
                minWidth : "250",
                hozAlign : "center",
                headerHozAlign : "center"
            },
            {
                // Col-6
                title : "CUF (%)",
                field : "cuf",
                minWidth : "250",
                hozAlign : "center",
                headerHozAlign : "center"
            },
        ]

    });
</script>
<!-- Ends: Month Report Data -->


<!-- Begin: Year Reports Data -->
<script>
    var yearReportData = [
        {
            si: 1,
            year: "2021",
            plantYearGen: 4.27,
            totalGen: 61992.53,
            tiltedRadiation: 0.00,
            cuf: 0.00
        },
        {
            si: 2,
            year: "2022",
            plantYearGen: 2399.81,
            totalGen: 64392.34,
            tiltedRadiation: 0.00,
            cuf: 2.20
        },
        {
            si: "Grand Total",
            year: "",
            plantYearGen: 12342399.81,
            totalGen: 234364392.34,
            tiltedRadiation: 12353.00,
            cuf: 123232.20
        },
    ];

    var table = new Tabulator("#tabulator_yearReports", {

        data: yearReportData,
        addRowPos: "top",

        layout:"fitDataStretch",

        pagination: "true",
        paginationSize: 18,
        paginationCounter: "rows",

        frozenRows:1,

        columns: [
            {
                // Col-1
                title : "SI",
                field : "si",
                sorter : "number",
                minWidth : "250",
                hozAlign : "center",
                headerHozAlign : "center"
            },
            {
                // Col-2
                title : "Year",
                field : "year",
                minWidth : "300",
                
                hozAlign : "center",
                headerHozAlign : "center",
                
                headerFilter:"input",
                headerFilterPlaceholder:"Year"
            },
            {
                // Col-3
                title : "Plant Year Gen (KWh)",
                field : "plantYearGen",
                minWidth : "250",

                bottomCalc:"sum",
                bottomCalcParams:{
                    precision:2
                },

                hozAlign : "center",
                headerHozAlign : "center"
            },
            {
                // Col-4
                title : "Total Gen (KWh)",
                field : "totalGen",
                minWidth : "250",
                hozAlign : "center",
                headerHozAlign : "center"
            },
            {
                // Col-5
                title : "Tilted Radiation-PR (%)",
                field : "tiltedRadiation",
                minWidth : "250",
                hozAlign : "center",
                headerHozAlign : "center"
            },
            {
                // Col-6
                title : "CUF (%)",
                field : "cuf",
                minWidth : "250",
                hozAlign : "center",
                headerHozAlign : "center"
            },
        ]

    });
</script>
<!-- Ends: Year Report Data -->


<!-- Begins: Day Data Reports -->
<script>
    var dayData = [
        {
            si: 1,
            dateTime: "11/01/2021 00:00:30",
            solarPower: 4.27,
            dayGen: 61992.53,
            energy: 3.93
        },
        {
            si: 2,
            dateTime: "12/01/2021 00:01:00",
            solarPower: 2399.81,
            dayGen: 64392.34,
            energy: 3.90
        },
        {
            si: 3,
            dateTime: "13/01/2021 00:01:30",
            solarPower: 2399.81,
            dayGen: 64392.34,
            energy: 3.85
        }
    ];

    var table = new Tabulator("#tabulator_dayData", {

        data: dayData,
        addRowPos: "top",

        layout:"fitDataStretch",

        pagination: "true",
        paginationSize: 18,
        paginationCounter: "rows",

        frozenRows:1,

        columns: [
            {
                // Col-1
                title : "SI",
                field : "si",
                sorter : "number",
                minWidth : "250",
                hozAlign : "center",
                headerHozAlign : "center"
            },
            {
                // Col-2
                title : "Date & Time",
                field : "dateTime",
                minWidth : "300",
                
                hozAlign : "center",
                headerHozAlign : "center",
                
                headerFilter:"date"
            },
            {
                // Col-3
                title : "Solar Power (KW)",
                field : "solarPower",
                minWidth : "250",
                hozAlign : "center",
                headerHozAlign : "center"
            },
            {
                // Col-4
                title : "Day Gen (KWh)",
                field : "dayGen",
                minWidth : "250",
                hozAlign : "center",
                headerHozAlign : "center"
            },
            {
                // Col-5
                title : "Energy (KWh / KWp)",
                field : "energy",
                minWidth : "250",
                hozAlign : "center",
                headerHozAlign : "center"
            },
        ]

    });
</script>
<!-- Ends: Day Data Reports -->
