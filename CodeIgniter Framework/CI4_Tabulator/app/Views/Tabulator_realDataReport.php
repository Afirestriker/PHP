<!-- 
    Logic:

    1. Using Bootstrap, create nav-tabs and tab-content. So that we can show different report on same page, but different section.
    2. Now,
       *on each nav-link we use attribute 'onClick' to call a javaScript function (fetchDayReport()) that will call a controller function (realDayReport()).
       *At controller function (realDayReport()) we locad model and create a array whoes data is assign by calling model function (getDayReport())
       *At model function (getDayReport()), we first assign table name (dayReport) from which we want to fetch data and fetch all the data using function (findAll()).
       *Now, model function return the data to controller array and from controller we call a view and pass the array to it.

    3. At view,

      *First check if the array that is pass from controller is set or not using (isset()) function ,
        since at a time only one array can be pass and on same page we are having more than 1 report to be shown for which different table is there in database

      *If the particular array is set, we change the nav-link class to "active" for that particular tab
        and also change define class value 'show active'

      *If the particular array is set, then we fetch records from that array and it's get pass to tabulator using tabulator property "data: ".
       and then using tabulator our table is designed
 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Tabulator - Real Data Reports</title>

    <!-- BootStraph CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Tabulator CDN -->
    <link href="https://unpkg.com/tabulator-tables/dist/css/tabulator.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://unpkg.com/tabulator-tables/dist/js/tabulator.min.js"></script>


</head>
<body>

    <div class="m-4">
		<h6>Tabulator using Real Data</h6>
        <a href="<?= base_url('index.php/TabulatorBasic_controller/dummyReport') ?>">Go to: Tabulator - Dummy Data Report</a>
	</div>

    <!-- Container: for Nav-tabs and tab-content -->
    <nav class="container my-5">
        <div class="nav nav-tabs">
            <!-- Day Report Nav-tab -->
            <a id="nav-dayReports-tab" 
               class="nav-link <?php if(isset($dayReports)) { echo 'active'; } ?>" 
               onClick="fetchDayReport()" 
               data-bs-toggle="tab" data-bs-target="#nav-dayReports" >
               Day Reports
            </a>
			<!-- Month Report Nav-tab -->
            <a id="nav-monthReports-tab" 
               class="nav-link <?php if(isset($monthReports)) { echo 'active'; } ?>" 
               onClick="fetchMonthReport()" 
               data-bs-toggle="tab" data-bs-target="#nav-monthReports" >
               Month Reports
            </a>
			<!-- Year Report Nav-tab -->
            <a id="nav-yearReports-tab" 
                class="nav-link <?php if(isset($yearReports)) { echo 'active'; } ?>" 
                onClick="fetchYearReport()" 
                data-bs-toggle="tab" data-bs-target="#nav-yearReports" >
                Year Reports
            </a>
            <!-- Day-Data Report Nav-tab -->
			<a id="nav-dayData-tab" 
                class="nav-link" <?php if(isset($dayDataReports)) { echo 'active';} ?> 
                onClick="fetchDayDataReport()" 
                data-bs-toggle="tab" data-bs-target="#nav-dayData">
                Day Data
            </a>
        </div>

        <div class="tab-content border border-top-0 py-4 px-3">
			<!-- Tab: Day Reports Content -->
			<div id="nav-dayReports" class="tab-pane fade <?php if(isset($dayReports)) {echo "show active";} ?>" >
				<h5 class="mb-4">Day Reports Content</h5>
                <div id="tabulator_dayReports"></div>
			</div>
            <!-- Tab: Month Reports Content -->
			<div id="nav-monthReports" class="tab-pane fade <?php if(isset($monthReports)) {echo "show active";} ?>">
				<h5 class="mb-4">Month Reports Content</h5>
                <div id="tabulator_monthReports"></div>
			</div>
            <!-- Tab: Year Reports Content -->
			<div id="nav-yearReports" class="tab-pane fade <?php if(isset($yearReports)) { echo "show active"; } ?>">
				<h5 class="mb-4">Year Reports Content</h5>
                <div id="tabulator_yearReports"></div>
			</div>
            <!-- Tab: Day-Data Reports Content -->
			<div id="nav-dayData" class="tab-pane fade  <?php if(isset($dayDataReports)) echo "show active"; ?> ">
				<h5 class="mb-4">Day Data Content</h5>
                <div id="tabulator_dayData"></div>
			</div>
        </div>
    </nav>


</body>
</html>

<!-- Begin: Day Report Data -->
<script>

    /**On clicking Day-Report nav-tab this function is called, which in turn call the realDataReport function in controller */
    function fetchDayReport(){
        window.location.href = '<?= base_url('index.php/TabulatorRealData_controller/realDataReport') ?>';
    }

    /* 
     * need to assign if condition, to check if variable $dayReports is assigned or not
     * if assigned, then only execute this below code otherwise not.
    */
    <?php if(isset($dayReports))
    { ?>
        function getDayReports(){
            var dayReport = [];
    
            <?php foreach ($dayReports as $dayReport) { ?>
                dayReport.push({
                    si: <?= $dayReport['si']; ?>,
                    date: "<?= $dayReport['date']; ?>",
                    plantDayGen: <?= $dayReport['plantDayGen']; ?>,
                    totalGen: <?= $dayReport['totalGen']; ?>,
                    tiltedRadiation: <?= $dayReport['tiltedRadiation']; ?>,
                    cuf: <?= $dayReport['cuf']; ?>
                });
            <?php } ?>

            return dayReport;
        };

        var table = new Tabulator("#tabulator_dayReports", {

            data: getDayReports(),
            addRowPos: "top",

            height: 520,

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

                    /*  */
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

    <?php 
    } 
    ?>
</script>
<!-- Ends: Day Report Data -->


<!-- Begins: Month Report Data -->
<script>
    /**On clicking Month-Report nav-tab this function is called, which in turn call the realMonthReport function in controller */
    function fetchMonthReport(){
        window.location.href = '<?= base_url('index.php/TabulatorRealData_controller/realMonthReport') ?>';
    }

    /* 
     * need to assign if condition, to check if variable $monthReports is assigned or not
     * if assigned, then only execute this below code otherwise not.
    */
    <?php if(isset($monthReports))
    { ?>
        function getMonthReport(){
            var monthReport = [];

            <?php foreach ($monthReports as $monthReport) { ?>
                monthReport.push({
                    si: <?= $monthReport['si']; ?>,
                    month: "<?= $monthReport['month']; ?>",
                    plantMonthGen: <?= $monthReport['plantMonthGen']; ?>,
                    totalGen: <?= $monthReport['totalGen']; ?>,
                    tiltedRadiation: <?= $monthReport['tiltedRadiation']; ?>,
                    cuf: <?= $monthReport['cuf']; ?>
                });
            <?php } ?>

            return monthReport;
        };

        var table = new Tabulator("#tabulator_monthReports", {

            data: getMonthReport(),
            addRowPos: "top",

            height: 520,

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

    <?php 
    } 
    ?>
</script>
<!-- Ends: Month Report Data -->



<!-- Begins: Year Report Data -->
<script>
    /**On clicking Year-Report nav-tab this function is called, which in turn call the realYearReport function in controller */
    function fetchYearReport(){
        window.location.href = '<?= base_url('index.php/TabulatorRealData_controller/realYearReport') ?>';
    }

    /* 
     * need to assign if condition, to check if variable $monthReports is assigned or not
     * if assigned, then only execute this below code otherwise not.
    */
    <?php if(isset($yearReports))
    { ?>
        function getYearReport(){
            var yearReport = [];

            <?php foreach ($yearReports as $yearReport) { ?>
                yearReport.push({
                    si: <?= $yearReport['si']; ?>,
                    year: "<?= $yearReport['year']; ?>",
                    plantYearGen: <?= $yearReport['plantYearGen']; ?>,
                    totalGen: <?= $yearReport['totalGen']; ?>,
                    tiltedRadiation: <?= $yearReport['tiltedRadiation']; ?>,
                    cuf: <?= $yearReport['cuf']; ?>
                });
            <?php } ?>

            return yearReport;
        };

        var table = new Tabulator("#tabulator_yearReports", {

            data: getYearReport(),
            addRowPos: "top",

            height: 520,

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

    <?php 
    } 
    ?>
</script>

</script>
<!-- Ends: Year Report Data -->


<!-- Begins: Day-Data Reports Data -->
<script>
    /**On clicking Day-Data nav-tab this function is called, which in turn call the realDayDataReport function in controller */
    function fetchDayDataReport(){
        window.location.href = '<?= base_url('index.php/TabulatorRealData_controller/realDayDataReport'); ?>';
    }

    <?php if(isset($dayDataReports) ){ ?>
        
        function getDayDataReport(){

            var dayDataReport = [];

            <?php foreach ($dayDataReports as $dayDataReport) { ?>
                dayDataReport.push({
                    si: <?= $dayDataReport['si']; ?>,
                    dateTime: "<?= $dayDataReport['datetime']; ?>",
                    solarPower : <?= $dayDataReport['solarPower']; ?>,
                    dayGen: <?= $dayDataReport['dayGen']; ?>,
                    energy: <?= $dayDataReport['energy']; ?>
                });
            <?php } ?>

            return dayDataReport;
        }


        var table = new Tabulator("#tabulator_dayData", {

            data: getDayDataReport(),
            addRowPos: "top",

            height: 520,

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
                    
                    headerFilter:"input",
                    headerFilterPlaceholder:"Date & Time"
                },
                {
                    // Col-3
                    title : "Solar Power (KW)",
                    field : "solarPower",
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
                    title : "Day Gen (KWh)",
                    field : "dayGen",
                    minWidth : "250",
                    hozAlign : "center",
                    headerHozAlign : "center"
                },
                {
                    // Col-5
                    title : "Energy (KWh/KWp)",
                    field : "energy",
                    minWidth : "250",
                    hozAlign : "center",
                    headerHozAlign : "center"
                },
            ]

        });


    <?php 
    } 
    ?>

</script>
<!-- Ends: Day-Data Reports Data -->
