<?php include('functionmain.php');?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css\style.css">
	<title></title>
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  
</head>
<body>
<section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="image/carreg.jpg"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase text font-weight-bolder text-primary"><u>Booking Form</u></h3>
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <form action="regcode.php" method="post">
                    <div class="form-group">
                      <?php
                      if(isset($_GET['car']))
                             { 
                              $carid= $_GET['car'];
                                $car_data = getByID("cars",$carid);
                                  $cars = mysqli_fetch_array($car_data);
                         if($cars)
                            {
    
                                ?>
                      <label class="control-label">Car Name<span>*</span></label>
              <input type="text" name="carname" value="<?=$cars['carname'];?>" class="form-control white_bg" id="carname"  readonly>
              <?php

          
        }
         else
         {
          echo "No data available";
         }
 
  }
  else
  {
    echo "something went wrong";
  }
  ?>

                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-group">
                      <label class="control-label">Name <span>*</span></label>
              <input type="text" name="name" class="form-control white_bg" id="name" required >
                    </div>
                  </div>
                 <div class="col-md-6 mb-4">
                     <div class="form-group">
                    <label class="control-label">Pickup Date<span>*</span></label>
                     <input type="date" name="pickupdate" class="form-control white_bg" id="pickupdate">
                      </div>
                    </div>
                      <div class="col-md-6 mb-4">
                      <div class="form-group">
                    <label class="control-label">Return Date<span>*</span></label>
                     <input type="date" name="returndate" class="form-control white_bg" id="returndate">
                      </div>
                    </div>
                </div>
                 <div class="form-group">
              <label class="control-label">Email Address <span>*</span></label>
              <input type="email" name="email" class="form-control white_bg" id="emailaddress" required>
            </div>
            <div class="form-group">
              <label class="control-label">Phone Number <span>*</span></label>
              <input type="text" name="phonenumber" class="form-control white_bg" id="phonenumber" required maxlength="10" pattern="[0-9]+">
            </div>
            <div class="form-group">
              <label class="control-label">Address <span>*</span></label>
              <textarea class="form-control white_bg" name="address" rows="4" required></textarea>
            </div>

            <div class="form-group">
              <button class="btn btn-danger" type="submit" >Submit Form </button>
            </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>


</section>

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>