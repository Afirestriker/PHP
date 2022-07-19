<html>
    <head>
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
<body>
    <!-- Button trigger modal -->
    <center style="text-align: right; margin-right: 10%; margin-top: 1%;">
      <form action="<?= base_url()."EmployeeController/insert"?>" method="post" >

      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Create
      </button></center>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row g-3">
      <div class="col-2" >
    <input type="text" name="srno" pattern="[0-9]{1,}" class="form-control" placeholder="Sr.no" required ><br>
  </div>
  <div class="col">
    <input type="text" name="firstname" class="form-control" placeholder="First name" required >
  </div>
  <div class="col">
    <input type="text" name="lastname" class="form-control" placeholder="Last name" required ><br>
  </div>
</div>
<div class="row g-3">
  <div class="col">
    <input type="email" name="email" class="form-control" placeholder="EmailID"  id=" id="validationCustom03" required>
  </div>
  <div class="col">
    <input type="text" name="mobile" pattern="[0-9]{10,13}" class="form-control" placeholder="Mobile.No" required>
  </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Submit</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
</form>

<div class="container bg-light">
  <div class="row bg-secondary text-light"> 
    <div class="col"> Sr No </div>
    <div class="col"> Name </div>
    <div class="col"> Surname </div>
    <div class="col"> Email </div>
    <div class="col"> Mobile No. </div>
  </div>
  <?php foreach($users as $user) { ?>
  <div class="row p-2"> 
    <div class="col "> <?= $user['sr_no'] ?> </div>
    <div class="col "> <?= $user['name'] ?> </div>
    <div class="col "> <?= $user['surname'] ?> </div>
    <div class="col "> <?= $user['email'] ?> </div>
    <div class="col "> <?= $user['mobile_no'] ?> </div>
  </div>
  <?php } ?>

</div>

</body>
</html>