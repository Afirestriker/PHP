var deactive = 0;


/* Tabulator Formatter function for On/Off switch */
function getSwitch(cell, sLink = 1) {
  var sVal = cell.getRow().getData();
  var sField = cell.getField();
  var sStat = "disabled";
  /* var sStat   = (sVal[sField] == -1)? "disabled" : ""; */

  return (
    `<div class="form-check form-switch" style="margin-left: 35%">
            <input type="checkbox" id="`+ sField + sVal["id"] +`" class="form-check-input" value=` + sVal[sField] +` `+ (sVal[sField] == 1 ? "checked" : "") +` ` + sStat +`>
            <label class="form-check-label" for="` + (sLink == 0 ? "" : sField + sVal.id) + `"></label> 
    </div>`
  );
}

/* Tabulator Formatter function for Edit/Active-Deactive button */
var actionIcon = function (cell, data, value, row, options) {
  var sStat = cell.getRow().getData().active == 0 ? "disabled" : "";
  var title = cell.getRow().getData().active == 0 ? "Active" : "Deactive";
  var statIcon = cell.getRow().getData().active == 0 ? "check" : "ban";

  return (
    `<button id="btnEdit" value="` + cell.getRow().getData().serial +
      `" class="btn btn-xs btn-default border border-1 .btnUserView" data-original-title="view Row" title="Edit" ` + sStat +`>
                <i class="fas fa-edit"></i>
    </button>
     
    <button id="btnDeactivate" value="` + cell.getRow().getData().serial +
      `" class="btn btn-xs btn-default border border-1 p-1"  data-original-title="View User Plant" onclick="" data-toggle="tooltip" title="` + title +`">
                <i class="fas fa-` + statIcon +`"></i>
    </button>`
  );
};

/* Inline editing validator for field="netWorth" to validate no of digit after period (.) */
var myValidator = function (cell, value) {
  var myCheck = /^(?:\d*\.\d{1,3}|\d+)$/;
  return myCheck.test(value);
};


/**
 * Mutators (setters) and Accessors (getters) allow you to manipulate the table data as it enters and leaves your Tabulator, 
 * allowing you to convert values for use in your table and then change them again as they leave.
 */

//Tabulator Mutators
var countryNameMutator = function (value, data, type, params, column) {
  return dbCountries[value];
}

//Tabulator Accessor
var countryNameAccessor = function (value, data, type, params, column) {
  return Object.keys(dbCountries).find(key => dbCountries[key] == value);  
};


/* Draw Tabulator */
function drawCompanyTabulator() {
  deactive = $("#cbDeactive").is(":checked") ? 1 : 0;

  companyTabulator = new Tabulator("#companyTabulator", {
    height: 620,
    // data: companyTableData,
    data: dbCompanyTableData,
    layout: "fitColumns",
    tooltips: true,
    addRowPos: "top",
    history: true,
    pagination: "local",
    paginationSize: 20,
    movableColumns: true,
    resizableRows: false,
    initialSort: [{ column: "created", dir: "asc" }],
    placeholder: "No Data Available",
    columns: [
      {
        title: "SN",
        field: "serial",
        width: 60,
        sorter: "number",
        frozen: true,
        visible: false,
      },
      {
        title: "Created On",
        field: "created",
        width: 150,
        hozAlign: "center",
        headerHozAlign: "center",
      },
      {
        title: "Company Name",
        field: "cname",
        width: 100,
        hozAlign: "center",
        headerHozAlign: "center",
      },
      {
        title: "Email",
        field: "cemail",
        hozAlign: "center",
        headerHozAlign: "center",
      },
      {
        title: "Mobile No",
        field: "cmobile",
        hozAlign: "center",
        headerHozAlign: "center",
      },
      {
        title: "GST No.",
        field: "cGST",
        hozAlign: "center",
        headerHozAlign: "center",
      },
      {
        title: "Address",
        field: "addr1",
        hozAlign: "center",
        headerHozAlign: "center",
      },
      {
        title: "Net Worth",
        field: "netWorth",
        hozAlign: "center",
        headerHozAlign: "center",
        editor: true,
        editor: "input",
        validator: myValidator,
      },
      {
        title: "Address 2",
        field: "addr2",
        Width: 200,
        hozAlign: "center",
        headerHozAlign: "center",

        visible: false,
      },
      {
        title: "City",
        field: "city",
        Width: 100,
        hozAlign: "center",
        headerHozAlign: "center",
      },

      {
        title: "State",
        field: "state",
        Width: 100,
        hozAlign: "center",
        headerHozAlign: "center",
      },

      {
        title: "Country",
        field: "country_name",
        Width: 100,
        hozAlign: "center",
        headerHozAlign: "center",

        mutator: countryNameMutator,
        accessor: countryNameAccessor,
        editor: "list",
        editorParams: {
          autocomplete: "true",
          allowEmpty: true,
          listOnEmpty: true,
          valuesLookup: true,
        },
      },

      {
        title: "Zip",
        field: "zip",
        hozAlign: "center",
        headerHozAlign: "center",
      },

      {
        title: "Active",
        field: "active",
        width: 80,
        hozAlign: "center",
        headerHozAlign: "center",

        formatter: function (cell, formatterParams, onRendered) {
          return getSwitch(cell, 0);
        },
      },

      {
        title: "Action",
        field: "id",
        width: 80,
        hozAlign: "center",
        headerHozAlign: "center",

        formatter: actionIcon,
        headerSort: false,
      },
    ],
  });

  deactive ? companyTabulator.setFilter("active", ">=", 0) : companyTabulator.setFilter("active", "=", 1);
}
