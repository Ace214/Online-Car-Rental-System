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
<section class="h-100 h-custom" style="background-color: #8fc4b7;">
    
             <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">

        <div class="card rounded-3">
          
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2 text-danger text-center font-weight-bolder">CAR MODELS </h3>

               <?php
                $categories = getAll("categories");
        if(mysqli_num_rows($categories) > 0)
        {
          foreach($categories as $item)
          {
            ?>
            <a href="products.php?category=<?=$item['Id'];?>">
           <div class="list-group">
          <div class="list-group-item list-group-item-warning" value="<?=$item['Id'];?>"><?=$item['name'];?>
          </div>
          </a> 
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