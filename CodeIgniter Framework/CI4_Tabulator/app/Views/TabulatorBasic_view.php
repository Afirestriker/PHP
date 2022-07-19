<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tabulatro in CI4</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Tabulator CDN -->
    <link href="https://unpkg.com/tabulator-tables/dist/css/tabulator.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://unpkg.com/tabulator-tables/dist/js/tabulator.min.js"></script>

</head>

<body>
    <div class="container mt-5">
        <h4>This is tabulator Basic View</h4>
        <div id="tabulator_example"></div>

        <a href="<?= base_url('index.php/TabulatorBasic_controller/dummyReport') ?>" class="m-4"> <h3>Go to: Tabulator - Reports (Dummy Data)</h3> </a>
        <a href="<?= base_url('index.php/TabulatorRealData_controller/realDataReport') ?>"> <h3>Go to: Tabulator - Reports (Real Data)</h3> </a>
    </div>
</body>

</html>

<script>
    /* Creating array that will be pass to table as data */
    var tabledata = [{
            id: 1,
            name: "Oli Bob",
            progress: 12,
            gender: "male",
            rating: 1,
            col: "red",
            dob: "19/02/1984",
            car: 1,
        },
        {
            id: 2,
            name: "Mary May",
            progress: 1,
            gender: "female",
            rating: 2,
            col: "blue",
            dob: "14/05/1982",
            car: true
        },
        {
            id: 3,
            name: "Christine Lobowski",
            progress: 42,
            gender: "female",
            rating: 0,
            col: "green",
            dob: "22/05/1982",
            car: "true"
        },
        {
            id: 4,
            name: "Brendon Philips",
            progress: 100,
            gender: "male",
            rating: 1,
            col: "orange",
            dob: "01/08/1980"
        },
        {
            id: 5,
            name: "Margret Marmajuke",
            progress: 16,
            gender: "female",
            rating: 5,
            col: "yellow",
            dob: "31/01/1999"
        },
        {
            id: 6,
            name: "Frank Harbours",
            progress: 38,
            gender: "male",
            rating: 4,
            col: "red",
            dob: "12/05/1966",
            car: 1
        },
    ];



    /*
     * Begins: JavaScript - Feature Rich Table
     * Below code, create a table with the data array written above i.e. tabledata and show it in HTML <div> tag with id= "players" *
     * new Tabulator(“#players”, {: Here #players is the HTML div id where the table will render.
     * height: 220: Here you can define the height of the table, if more records will load, then a scrollbar will appear.
     * data: tabledata: Here we need to pass the data, in this case, this is the JavaScript data array name.
     * layout: “fitColumns”: The table layout will fit the page.
     * pagination: “local” and paginationSize: 5: These parameters we required to implement paging.To enable pagination we need to set it to local and paginationSize.
     * tooltips: true: Once you set it to true when you hover any column in the table the data will be displayed.*/
    var table = new Tabulator("#tabulator_example", {

        data: tabledata, //data for table is provided as array which is define above named: tabledata

        height: 260, //define fix table height, if rows are more, then it will scroll

        layout: "fitColumns", //fit columns to width of table
        // layout: "fitDataStretch", //fit columns to width of table by stretching the last column

        responsiveLayout: "hide", //hide columns that dont fit on the table

        tooltips: true, //show tool tips on cells

        addRowPos: "top", //when adding a new row, add it to the top of the table

        history: true, //allow undo and redo actions on the table

        pagination: "local", //paginate the data
        paginationSize: 7, //allow 7 rows per page of data
        paginationCounter: "rows", //display count of paginated rows in footer

        movableColumns: true, //allow column order to be changed

        addRowPos: "top", //when adding a new row, add it to the top of the table

        // resizableColumnFit: true,  //On column resize, make other column automatically resize to maintain table with

        columns: [ //define the table columns
            {
                title: "ID",
                field: "id",
                sorter: "number",
                width: "98",
                // resizable: true
                // headerFilter: "input"
                // editor: "input"
            },
            {
                title: "Name",
                field: "name",
                headerFilter: "input"
                // editor: "input"
            },
            {
                title: "Task Progress",
                field: "progress",
                hozAlign: "left",
                formatter: "progress",
                formatterParam: {
                    color: "#b04d2c"
                },
                editor: true
            },

            /* Column Group */
            {
                title: "Group 1",
                headerHozAlign: "center",
                columns: [
                    {title: "Gender", field: "gender", width: 95, editor: "select", headerHozAlign: "center", hozAlign : "center", editorParams: {values: ["male", "female"]}},
                    {title: "Rating", field: "rating", formatter: "star", hozAlign: "center", headerHozAlign: "center", width: 100, editor: true},
                    {title: "Color", field: "col", width: 130, formatter: "color", hozAlign: "center", headerHozAlign: "center", editor: "input" }
                ]
            },        
            {
                title: "Date Of Birth",
                field: "dob",
                width: 130,
                sorter: "date",
                hozAlign: "center"
            },
            {
                title: "Driver",
                field: "car",
                width: 90,
                hozAlign: "center",
                formatter: "tickCross",
                sorter: "boolean",
                editor: true
            },
        ],

    });
    // Ends: JavaScript - Feature Rich Table
</script>