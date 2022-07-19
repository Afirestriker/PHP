<!-- 
 Date: 28th June 2022
 * This page is used to perform CRUD operation:
	1. Insert data into Employee table
	2. Read data from database
	3. Delete data
 -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- CSS only -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<title>View & Add Employee</title>
</head>
<body>

	<!--Page main container-->
	<div class="mt-5 mx-5 pb-4 border bg-light text-right">
		
		<!-- Modal trigger Button -->
		<button type="button" class="btn btn-primary m-3 mr-5 " data-toggle="modal" data-target="#model_employeeRegistration"> Add New Employee</button>

		<!-- Table Container -->
		<div class="mx-3 text-left p-2 px-4">
			<table class="table table-striped table-responsive-md">
				<thead class="thead-dark">
					<tr>
						<th scope="col">#ID</th>
						<th scope="col">Name</th>
						<th scope="col">DOB</th>
						<th scope="col">Gender</th>
						<th scope="col">Email</th>
						<th scope="col">Mobile</th>
						<th scope="col">Edit/Delete</th>
					</tr>
				</thead>
				<tbody class="">
					<?php foreach($employee as $emp) { ?>
					<tr>
						<th scope="row">#<?= $emp['emp_id']; ?></th>
						<td><?= $emp['firstname'] . " " . $emp['lastname'] ; ?></td>
						<td><?= $emp['date']; ?></td>
						<td>
							<?php if($emp['gender'] == 'M') echo "Male" ?>
							<?php if($emp['gender'] == 'F') echo "Female" ?>
							<?php if($emp['gender'] == 'O') echo "Other" ?>
						</td>
						<td><?= $emp['email']; ?></td>
						<td><?= $emp['mobile']; ?></td>
						<td>
							<!-- <a href="#" class="btn btn-dark text-warning mr-2" data-toggle="modal" data-target="#model_EditEmployee">Edit</a> -->
							<a href="<?= base_url('index.php/Employee/edit') ."/".$emp['emp_id']; ?>" class="">Edit</a> /
							<a href="#" onclick="deleteConfirm(<?= $emp['emp_id'];?>);" class="text-danger">Delete</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<!-- Close: Table container -->
		
	</div>
	<!--Close: Page main container-->













<!-- Add Modal -->
	<div class="modal fade" id="model_employeeRegistration" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Employee Registration</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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

			            <form name="empRegistrationForm" id="empRegistrationForm" class="px-md-2" action="<?= base_url('index.php/Employee/addAction') . "/"; ?>" method="get">

			               <div class="row">
			            		<div class=" col form-outline mb-4">
				                	<label class="form-label" for="Name">First Name*</label>
					                <input type="text" name="firstname" placeholder="First Name" id="form3Example1q" class="form-control" required />
			              		</div>
				              	<div class=" col form-outline mb-4">
					                <label class="form-label" for="Name">Last Name*</label>
					                <input type="text" name="lastname" placeholder="Last Name" id="form3Example1q" class="form-control"  required />
				              	</div>	
			               </div>

			              <div class="row">
			                <div class="col-md-6 mb-4">
			                  <div class="form-outline datepicker">
			                    <label for="Date" class="form-label">Enter DOB*</label>
			                    <input type="date" name="date" class="form-control" id="exampleDatepicker1" required />
			                  </div>
			                </div>
			                <div class="col-md-6 mb-4">
 			                  <label for="Email" class="form-label">Gender*</label><br>
			                  <input type="radio" name="gender" value="M" required>Male
			                  <input type="radio" name="gender" value="F" >Female
			                  <input type="radio" name="gender" value="O" >Other
			                </div>
			              </div>

			              <div class="mb-4">
			              	<label for="Email" class="form-label">Email*</label>
			              	<input type="email" name="email" placeholder="example@emp.com" class="form-control" required>
			              </div>

			              <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
			                <div class="col-md-6">

			                  <div class="form-outline">
			                    <label class="form-label" for="Mobile No.">Mobile No.*</label>
			                    <input type="number" name="mobile" placeholder="Mobile Number" id="form3Example1w" class="form-control" value="" required />
			                  </div>

			                </div>
			              </div>

			              <input type="submit" value="SUBMIT" class="btn btn-success btn-lg mb-1">
			              <button type="button" class="btn btn-secondary btn-lg mb-1" data-dismiss="modal">CLOSE</button>
			            </form>
			          </div>
			          <hr style="height: 4px; color: blue;">

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
	<div class="modal fade" id="model_EditEmployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Edit #101 Employee</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
			            <form name="empRegistrationForm" id="empRegistrationForm" class="px-md-2" action="<?= base_url('index.php/Employee/editAction') . "/"; ?>" method="get">

			               <div class="row">

			               		<div class="mb-4 col-12">
			              			<label for="Emp_ID" class="form-label">Registration #ID*</label>
			              			<input type="text" name="emp_id" placeholder="#ID" class="form-control" value="#101" required readonly>
			              		</div>

			            		<div class=" col form-outline mb-4">
				                	<label class="form-label" for="Name">First Name*</label>
					                <input type="text" name="firstname" placeholder="First Name" id="form3Example1q" class="form-control" required />
			              		</div>
				              	<div class=" col form-outline mb-4">
					                <label class="form-label" for="Name">Last Name*</label>
					                <input type="text" name="lastname" placeholder="Last Name" id="form3Example1q" class="form-control"  required />
				              	</div>	
			               </div>

			              <div class="row">
			                <div class="col-md-6 mb-4">
			                  <div class="form-outline datepicker">
			                    <label for="Date" class="form-label">Enter DOB*</label>
			                    <input type="date" name="date" class="form-control" id="exampleDatepicker1" required />
			                  </div>
			                </div>
			                <div class="col-md-6 mb-4">
 			                  <label for="Email" class="form-label">Gender*</label><br>
			                  <input type="radio" name="gender" value="M" required>Male
			                  <input type="radio" name="gender" value="F" >Female
			                  <input type="radio" name="gender" value="O" >Other
			                </div>
			              </div>

			              <div class="mb-4">
			              	<label for="Email" class="form-label">Email*</label>
			              	<input type="email" name="email" placeholder="example@emp.com" class="form-control" required>
			              </div>

			              <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
			                <div class="col-md-6">

			                  <div class="form-outline">
			                    <label class="form-label" for="Mobile No.">Mobile No.*</label>
			                    <input type="number" name="mobile" placeholder="Mobile Number" id="form3Example1w" class="form-control" value="" required />
			                  </div>

			                </div>
			              </div>

			              <input type="submit" value="Update" class="btn btn-success btn-lg mb-1 mr-3">
			              <button type="button" class="btn btn-secondary btn-lg mb-1" data-dismiss="modal">Close</button>
			            </form>
			          </div>
			          <hr style="height: 4px; color: blue;">

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
</html>

<!-- alert on delete press -->
<script>
	function deleteConfirm(id){
		if(confirm("Delete! #" + id + "! Are you sure?")){
			window.location.href='<?= base_url('index.php/Employee/deleteAction')?>/'+id;
		}
	}
</script>