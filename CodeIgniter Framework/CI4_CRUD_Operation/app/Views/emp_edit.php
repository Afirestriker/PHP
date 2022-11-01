<!-- 
 Date: 1 July 2022
 This page load the particular employee data in pre-filled form, and on submit it called
  model function 
  -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Bootstrap CSS & jQuery -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<title>View Employee</title>
</head>
<body>

<section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="https://registrationmagic.com/wp-content/uploads/2019/03/hero_banner.jpg"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
            alt="Sample photo">
            
            

            <div class="row">
            	<div class="col">
            		<!-- Employee Details Card -->
          			<div class="card-body p-4 p-md-5 border-bottom border-success ">
		            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Employee #<?= $employee['emp_id']; ?> Details</h3>

        		    <form class="px-md-2" action="<?= base_url('index.php/Employee/editAction') ?>/" method="get">

	              		<div class="form-outline mb-4">

	              			<input type="hidden" name="empId" value="<?=  $employee['emp_id'];?>">
	              			<div class="row">
	              			 	<div class="col-md-6 mb-4">
			                		<label class="form-label" for="Name">Firstname</label>
			                		<input type="text" name="firstname" 
			                		value="<?= $employee['firstname']; ?>" placeholder="Full Name" id="form3Example1q" class="form-control" required />
			                	</div>
			                	<div class="col-md-6 mb-4">
			                		<label class="form-label" for="Name">Lastname</label>
			                		<input type="text" name="lastname" 
			                		value="<?= $employee['lastname']; ?>" placeholder="Full Name" id="form3Example1q" class="form-control" required />
			                	</div>
		                	</div>
	                	</div>

	              		<div class="row">
	                		<div class="col-md-6 mb-4">

	                  			<div class="form-outline datepicker">
	                    			<label for="Date" class="form-label">DOB</label>
	                    			<input type="date" name="date" class="form-control" id="exampleDatepicker1" 
	                    			value="<?= $employee['date']; ?>" required />
		                  		</div>
	                		</div>
	                		<div class="col-md-6 mb-4">
	                  			<label for="Gender" class="form-label">Gender</label><br>
	                  			<input type="radio" name="gender" value="M" 
	                  				<?php if($employee['gender'] == "M") {echo "checked";} ?> required>Male
	                  			<input type="radio" name="gender" value="F"
	                  				<?php if($employee['gender'] == "F") {echo "checked";} ?>>Female
	                  			<input type="radio" name="gender" value="O" 
	                  				<?php if($employee['gender'] == "O") {echo "checked";} ?>>Other
							</div>
	              		</div>

	              		<div class="mb-4">
	             		 	<label for="Email" class="form-label">Email</label>
	              			<input type="email" name="email" placeholder="Email" 
	              			value="<?= $employee['email'];?>" 
	              			class="form-control" required>
	              		</div>

	              		<div class="row mb-4 pb-2 pb-md-0 mb-md-5">
	                		<div class="col-md-6">
	                  			<div class="form-outline">
	                    			<label class="form-label" for="Mobile No.">Mobile No.</label>
	                    			<input type="number" name="mobile" placeholder="mobile number" id="form3Example1w" class="form-control" 
	                    			value="<?= $employee['mobile'];?>" required />
	                  			</div>
	                		</div>
	              		</div>

	              		<input type="submit" value="UPDATE" class="btn btn-success btn-lg mb-1">
	              		<a href="<?= base_url('index.php/Employee/view') ?>" class="btn btn-secondary btn-lg mb-1">Close</a>
            		</form>
          			</div>
          		
          			<!-- Employee Details Card ends -->
            	</div>            		
            </div>
        </div>

        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>