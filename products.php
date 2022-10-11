<?php include('functionmain.php');
$categoryid= $_GET['category'];
$category = getByID("categories",$categoryid);

?>
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
  <!-- Navigation bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid text-warning">
     <h2 class="brand-name">
       <a href="index.html"><img class="img-responsive2"       
       src="image/car.png" width="60" height="60"></a>
       <h2>Cars4Rent</h2>
   </h2>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about.php">ABOUT US</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contact.php">CONTACT US</a>
        </li>
   

 </ul>
</nav>
<!-- Navigation bar ends here-->
<h3 class="mb-4 text-danger text-center font-weight-bolder"></h3>
<section style="background-color:skyblue;">
        <?php
                $cars = getbycar($categoryid);
        if(mysqli_num_rows($cars) > 0)
        {
          foreach($cars as $item)
          {
            ?>

  <!---first car-->
  <div class="container py-5">
    <div class="row justify-content-center mb-3">
      <div class="col-md-12 col-xl-10">
        <div class="card shadow-0 border rounded-3">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                <div class="bg-image hover-zoom ripple rounded ripple-surface">
                  <img src="admin/uploads/<?=$item['image'];?>"
                    class="w-100" />
                  <a href="#!">
                    <div class="hover-overlay">
                      <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 col-xl-6">
                <h5 font-weight-bolder><?=$item['carname'];?></h5>
                <div class="d-flex flex-row">
                  <div class="text-danger mb-1 me-2">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <span><?=$item['modelyear'];?></span>
                </div>
                <div class="mb-2 text-muted small">
                  <span>Fuel: <?=$item['fuel'];?></span>
                  <span class="text-primary"> • </span>
                  <span>Transmission : <?=$item['transmission'];?></span>
        
                </div>
                <p class="text-truncate mb-4 mb-md-0">
                  35 Days or More: Rs <?=$item['monthly'];?> per day 
                </p>
              </div>
              <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                <div class="d-flex flex-row align-items-center mb-1">
                  <h4 class="mb-1 me-1">Rs <?=$item['priceperday'];?>/day</h4>
                  
                </div>
                
                <div class="d-flex flex-column mt-4">
                  
                <a class="btn btn-danger btn-sm" href="reg.php?car=<?=$item['Id'];?>" role="button">Book Now</a>
                </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--ends-->
    <?php

          }
        }
         else
         {
          echo "No data available";
         }
 
  ?>

    
      
</section>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>


