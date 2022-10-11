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
          <a class="nav-link active" aria-current="page" href="model.php">CARS</a>
       </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contact.php">CONTACT US</a>
       </li>
     
<li class="nav-item">
     <a class="btn btn-info" href="admin/adminlogin.php" role="button"><b>ADMIN</b></a>
 </li>
 </ul>
</nav>
<!-- Navigation bar ends here-->
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/car1.jpg" alt="NEED A RIDE" width="1100" height="500">
      <div class="carousel-caption" color="" >
        <h1>NEED A RIDE?</h1>
        <p><b>YOU'VE COME TO THE RIGHT PLACE!</b></p>
        <a class="btn btn-danger" href="model.php" role="button">BOOK NOW</a>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/car2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption" color="" >
      	<p>PRESENTING ALL BRANDS NEW MODELS </p>
        <h1><b>DRIVE THE FASTEST</b></h1> 
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/car9.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption text-warning" >
        <h1><b>MAKE YOU'RE TRIP ENJOYABLE</b></h1> 
      </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>



	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>