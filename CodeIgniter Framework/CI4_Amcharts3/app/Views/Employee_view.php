<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Amcharts3 using Custom DB</title>

	<!-- Bootstrap CSS CDN -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- Bootstrap JavaScript Bundle with Popper CDN -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<!-- Amcharts3 Script and CSS -->
	<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
	<script src="https://www.amcharts.com/lib/3/serial.js"></script>
	<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
	<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />

</head>
<body class="bg-light">

	<div class="m-4">
		<h6 >Amcharts3 chart using Custom Data</h6>
		<a href="<?= base_url('index.php/AmchartsThree/') ?>">Go to: Amcharts3 Dummy Data Chart</a>
	</div>

	<!-- Nav-tabs and Tab-content Begins -->
	<nav class="container my-5">
		<!-- Nav-Tabs -->
		<div class="nav nav-tabs">
			<a id="nav-emp-tab" class="nav-link active" data-bs-toggle="tab" data-bs-target="#nav-emp">Employee Reports </a>
		</div>

		<!-- Nav-Tab content -->
		<div class="tab-content border border-top-0 py-4 px-3">
	
			<!-- Tab: Employee Table Content -->
			<div id="nav-emp" class="tab-pane fade show active">
				<div class="row">
					<!-- col1 for employee table -->
					<div class="col">
						<!-- Add Employee Button -->
						<div class="container text-end">
							<!-- Modal trigger Button -->
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#model_employeeRegistration"> Add New Employee</button>
						</div>
						<!-- Close: Add Employee Button -->
						<!-- Table Container -->
						<div class="m-2 text-left pt-4 px-4" style="max-height: 550px; width: 580px; overflow: auto; display: inline-block;">
							<table class="table table-striped table-responsive-md">
								<thead class="bg-dark text-light">
									<tr>
										<th scope="col">#ID</th>
										<th scope="col">Name</th>
										<th scope="col">Salary</th>
										<th scope="col">Edit/Delete</th>
									</tr>
								</thead>
								<tbody class="">
									<?php foreach($employee as $emp) { ?>
									<tr>
										<th scope="row">#<?= $emp['id']; ?></th>
										<td><?= $emp['name']; ?></td>
										<td><?= $emp['salary']; ?></td>
										<td>
											<a href="#" data-id="<?=$emp['id'];?>" data-name="<?=$emp['name'];?>" data-salary="<?=$emp['salary'];?>" data-bs-toggle="modal" data-bs-target="#model_editEmployee">Edit</a> /
											<a href="#" onclick="deleteConfirm(<?= $emp['id'];?>);" class="text-danger">Delete</a>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						<!-- Close: Table container -->
					</div>

					<!-- col2 for chart -->
					<div class="col">
						<div id="employee_chartdiv" style="height: 600px; width: 100%;"></div>
					</div>
				</div>
				<!-- Close: Row - Employee Table and Chart -->				
			</div>
			<!-- Close Tab: Employee Table Content -->
		</div>
		<!-- Close: Nav-Tab content -->
	</nav>
	<!-- Ends: Nav-tabs and Tab-Content -->







<!-- Add Modal -->
	<div class="modal fade" id="model_employeeRegistration" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Employee Registration</h5>
	        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
		  <!-- Modal Body -->
	      <div class="modal-body">
	      	<section class="h-100 h-custom" style="background-color: #8fc4b7;">
			  <div class="container py-5 h-100">
			    <div class="row d-flex justify-content-center align-items-center h-100 ">
			      <div class="col-lg-12 col-xl-12">
			        <div class="card rounded-3">
			          <img src="https://registrationmagic.com/wp-content/uploads/2019/03/hero_banner.jpg"
			            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
			            alt="Sample photo">

			          <!-- Employee Details Card -->
			          <div class="card-body p-4 p-md-5">
			            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Enter Employee Details</h3>

			            <form name="empRegistrationForm" id="empRegistrationForm" class="px-md-2" action="<?= base_url('index.php/Employee_controller/addEmployee') . "/"; ?>" method="get">

			               <div class="row">
			            		<div class=" col form-outline mb-4">
				                	<label class="form-label" for="Name">Name*</label>
					                <input type="text" name="name" placeholder="Name" id="nameField" class="form-control" required />
			              		</div>	
			               </div>

			              <div class="row">
			                <div class="col-md-6 mb-4">
			                    <label for="Salary" class="form-label">Salary*</label>
			                    <input type="number" name="salary" min="1" step=".01" class="form-control" id="salaryField" placeholder="Salary (Lakh)" required />
			                </div>
			              </div>

			              <div class="text-end ">
				              <input type="submit" value="SUBMIT" class="btn btn-success me-3">
				              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
			              </div>
			            </form>
			          </div>
			          <!-- Employee Details Card ends -->

			        </div>
			      </div>
			    </div>
			  </div>
			</section>
	      </div>
		  <!-- Modal Body ends-->
	    </div>
	  </div>
	</div>
<!-- Add Model ends -->


<!-- Edit Modal -->
	<div class="modal fade" id="model_editEmployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="EditModalTitle">Employee #<span id="empID"></span></h5> <!-- this value is set using edit jQuery script -->
	        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
		  <!-- Modal Body -->
	      <div class="modal-body">
	      	<section class="h-100 h-custom" style="background-color: #8fc4b7;">
			  <div class="container py-5 h-100">
			    <div class="row d-flex justify-content-center align-items-center h-100 ">
			      <div class="col-lg-12 col-xl-12">
			        <div class="card rounded-3">
			          <img src="https://registrationmagic.com/wp-content/uploads/2019/03/hero_banner.jpg"
			            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
			            alt="Sample photo">

			          <!-- Employee Details Card -->
			          <div class="card-body p-4 p-md-5">
			            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Edit Employee #<span id="empID"></span></h3>

			            <form name="empEditForm" id="empEditForm" class="px-md-2" action="<?= base_url('index.php/Employee_controller/editEmployee') . "/"; ?>" method="get">

			            	<input id="id" type="hidden" name="id" required>

			               <div class="row">
			            		<div class=" col form-outline mb-4">
				                	<label class="form-label" for="Name">Name*</label>
					                <input id="name" type="text" name="name" placeholder="Name" id="nameField" class="form-control" required />
			              		</div>	
			               </div>

			              <div class="row">
			                <div class="col-md-6 mb-4">
			                    <label for="Salary" class="form-label">Salary*</label>
			                    <input id="salary" type="number" name="salary" min="1" step=".01" class="form-control" id="salaryField" placeholder="Salary (Lakh)" required />
			                </div>
			              </div>

			              <div class="text-end ">
				              <input type="submit" value="SUBMIT" class="btn btn-success me-3">
				              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
			              </div>
			            </form>
			          </div>
			          <!-- Employee Details Card ends -->

			        </div>
			      </div>
			    </div>
			  </div>
			</section>
	      </div>
		  <!-- Modal Body ends-->
	    </div>
	  </div>
	</div>
<!-- Edit Model ends -->

</body>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
</html>



<!--******************************************************************************** 
	Begin: Edit Modal JavaScript
**************************************-->
<script>
	var myModalEl = document.getElementById('model_editEmployee');
	myModalEl.addEventListener('show.bs.modal', function (event) {

	  var button = $(event.relatedTarget);

	  var id = button.data('id');
	  var name = button.data('name');
	  var salary = button.data('salary');

	  /*.modal-header is the class and inside that we are looking for tag with ID 'empID' and usnig .text() we put text inside that tag*/
	  $(this).find('.modal-header #empID').text(id);
	  
	  $(this).find('.modal-body #empID').text(id);
	  
	  /*.modal-body is the class and inside that we are looking for input tag with id 'id' and using .val() we assign value to that input tag*/
	  $(this).find('.modal-body #id').val(id);
	  $(this).find('.modal-body #name').val(name);
	  $(this).find('.modal-body #salary').val(salary);

	});
</script>
<!--******************************************************************************** 
	End: Edit Modal JavaScript
**************************************-->



<!--******************************************************************************** 
	Begin: Confirm Delete Prompt
**************************************-->
<script>
	function deleteConfirm(id){
		if(confirm("Are your sure!! Delete Employee with ID #" + id)){
			window.location.href="<?= base_url('index.php/Employee_controller/deleteAction') ?>/"+id;
		}
	}
</script>
<!--******************************************************************************** 
	End: Confirm Delete Prompt
**************************************-->



<!--******************************************************************************** 
	Day Reports - Employee Chart JS Script
**************************************-->
<script>

	var emp_array = getEmployeeData();

	var chart = AmCharts.makeChart( "employee_chartdiv", {
	  "hideCredits":true,			/*This line hide amchart watermark*/
	  "type": "serial",
	  "addClassNames": true,
	  "theme": "none",
	  "autoMargins": false,
	  "marginLeft": 30,
	  "marginRight": 8,
	  "marginTop": 10,
	  "marginBottom": 26,
	  
	  "legend": {					/*This set legends for charts, as per charts setting*/
        "position": "top",
        "valueAlign": "left",
        "useGraphSettings": true
       },
	  
	  "balloon": {
	    "adjustBorderColor": false,
	    "horizontalPadding": 10,
	    "verticalPadding": 8,
	    "color": "#000000"			/*This color is for chart tooltip text color*/
	  },

	  "dataProvider" : emp_array,	/*This is array that provides data for chart*/

	  "valueAxes": [ {
	    "axisAlpha": 0,
	    "position": "left"
	  	} 
	   ],

	  "startDuration": 0,			/*This define chart full-load/animation duration in seconds*/
	  
	  "graphs": [ {
	  		/*Graph First Parameter: Here we style for bar and its tooltip*/
		    "alphaField": "alpha",
		    "balloonText": "<span style='font-size:12px;'>[[title]] of [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",	
		    "fillColorsField": "color",		/*This assign color to bar and tooltip based on color value specified for each in array*/
		    "fillAlphas": 1,
		    "title": "Total Salary",
		    "type": "column",
		    "valueField": "salary",
		    "dashLengthField": "dashLengthColumn"
		  }, 
		  {
		  	/*Graph second Parameter: Here we style line and its tooltip*/
		    "id": "graph2",
		    "balloonText": "<span style='font-size:12px;'>[[title]] of [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",
		    "bullet": "round",
		    "lineThickness": 3,
		    "bulletSize": 9,
		    "bulletBorderAlpha": 1,
		    "bulletColor": "#FFFFFF",
		    "useLineColorForBulletBorder": true,
		    "bulletBorderThickness": 1,
		    "fillAlphas": 0,
		    "lineAlpha": 0,
		    "title": "Total Salary",
		    "valueField": "salary",
		    "dashLengthField": "dashLengthLine"
	  	  }
	  	],

	  "categoryField": "name",		/*This is X-axis category or Label*/
	  
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
	  "titles": [
			{
				"text": "Employee - Salary Report",
				"size": 15,
			}
		],

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
		    "text": "Salary (Lakh)",
		    "rotation": 270,
		    "x": "0",
		    "y": "250",
		    "width": "50%",
		    "size": 15,
		    "bold": true,
		    "align": "right"
		  }
		],

	  "export": {
	    "enabled": true				/*This is chart download/export button feature*/
	  }

	} ); 							
	/*End: "var chart" initialization*/




	// Fetch Employee data from DB and store in array
	function getEmployeeData() {
	    var empData = [];

	    <?php foreach ($employee as $emp) { ?>
        	empId = <?= $emp['id']; ?>;
	        empName = "<?= $emp['name']; ?>";
	        empSalary = <?= $emp['salary']; ?>;		

	        empData.push({
	            id: empId,
	            name: empName,
	            salary: empSalary,
	            color: "#538096"
	        });
	    	
	    <?php } ?>
	    
	    return empData;
	}
	/*Close: generateChartData() */


</script>
<!--******************************************************************************** 
	End: Employee Chart JS Script
**************************************-->


