<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css\style.css">
  <title></title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <style >
     .header-extradiv{
    width: 100%;
    height: auto;
    margin: 100px 0;
    text-align: center;
    font-family: 'Josefin Slab', serif;
  
}
.extradiv{
    background: cyan;
    border: medium none;
    padding: 50px !important;
    border-radius: 3px;
    transition: 0.3s;
    font-family: 'Josefin Slab', serif;
    text-decoration: none;


}
.card{
  background-color: #87e5da;

}
.extradiv:hover{
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.3);
  transform: translateY(-20px);
}

.card.booking-card.v-2 {
  background-color: #c7f2e3;
  font-family: 'Josefin Slab', serif;
}



.card.booking-card.v-2 .card-body .card-text {
  color: #db2d43;
}

.card.card.booking-card.v-2 .chip {
  background-color: #87e5da;
}

.card.booking-card.v-2 .card-body hr {
  border-top: 1px solid #f7aa00;
}
.footer
{
   font-family: 'Josefin Slab', serif;
}
.services {
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  padding: 100px 0px;
}


   </style>
  
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
</div>
</div>
</div>
<!--next section1-->



<!--next section2-->
<div class="services" style="background-image: url(image/other-image-fullscren-1-1920x900.jpg);" >

<section class="header-extradiv text-info">
  <div class="card ">
  <div class="card-body">
 
 
  <h2 class="card-title font-weight-bold text-primary">WELCOME TO EXCLUSIVE CAR RENTAL</h2>
  <p  class="h5 card-text text-dark text-center">We are India’s fastest growing self drive car rental brand with a wide range of cars on rent for you to choose from. Be it business travel, leisure travel, intercity getaways or just city zipping - be spoilt for choices with our exhaustive range of well-maintained Hatchbacks, Sedans, SUVs and Luxury Cars on rent. 
  We ensuring you get the best rental cars at lowest prices throughout India.</p>
      
      
    </div>
  </div>
  <br>

  <div class="text-white">
  <h2> <b>WHAT SETS <mark>Cars4Rent</mark> APART?</b></h2>
</div>
  <div class="container">
    <div class="row">
      <div class="extradiv col-lg-4 col-md-4 col-12 text-dark">
        <a href="#"><i class="fa-3x fa-solid fa-car-on"></i></a>
        <h3><b>Unlimited Kilometers</b></h3>
        <p>No Kilometer Capping. Drive as much as you want without paying anything extra! </p>

      </div>
      <div class="extradiv col-lg-4 col-md-4 col-12 text-dark">
        <a href="#"><i class="fa-3x fa-solid fa-hand-holding-heart"></i></a>
        <h3><b>Limited Liability</b> </h3>
        <p>Freedom of driving cars as you own it minus the liabilities.  </p>

      </div>
      <div class="extradiv col-lg-4 col-md-4 col-12 text-dark">
        <a href="#"><i class="fa-3x fa-solid fa-user-shield"></i></a>
        <h3><b>Privacy & Freedom</b></h3>
        <p>Make every moment count with the privacy and freedom of having your own car.  </p>

      </div>

  

</section>

      <section >
      <div class="mx-auto my-5" style="max-width: 23rem;">

    <div class="card booking-card v-2 mt-2 mb-4 rounded-bottom">
      <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
        <img src="image/indexcar.jpg" class="img-fluid">
        <a href="#!">
          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
        </a>
      </div>
      <div class="card-body">

        <h4 class="card-title font-weight-bold"><a>How to book a car online?</a></h4>
        
        <p class="card-text">Step 1:Search and Select car of your choice.<br>Step 2:Book your Car.<br>Step 3:Enjoy your trip.<br>Step 4:Return the car.</p>
        <hr class="my-4">
        <p class="h5 font-weight-bold mb-4">Opening hours</p>
        <ul class="list-unstyled d-flex justify-content-start align-items-center mb-0">
          <li>Tuesday - Friday</li>
          <li>
            <div class="chip ms-3">10:00AM</div>
          </li>
          <li>
            <div class="chip ms-0 me-0">6:00PM</div>
          </li>
        </ul>
        <ul class="list-unstyled d-flex justify-content-start align-items-center mb-0">
          <li>Saturday - Sunday</li>
          <li>
            <div class="chip ms-3">9:00AM</div>
          </li>
          <li>
            <div class="chip ms-0 me-0">7:00PM</div>
          </li>
        </ul>
        <ul class="list-unstyled d-flex justify-content-start align-items-center mb-0">
          <li>Monday</li>
          <li>
          
            <div class="chip ms-3">CLOSED</div>
          </li>
        </ul>
          <hr class="my-4">
        <p class="h5 font-weight-bold mb-4">24 hours Customer Service</p>
      </div>
    </div>
    
  </section>
</div>
<!--footer section-->
<footer class=" footer bg-dark text-white text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class=" text-left col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase"><b>reach us</b></h5>

       
          
           <i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;Cars4Rent<br>Aban jn<br>Pathnamthitta<br>
          Kerala- 689646<br>
          <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;cars@gmail.com <br> 
          <i class="fa fa-phone" aria-hidden="true"></i>&nbsp;8281128403</i>
   
 
        

      </div>
      

      <!--Grid column-->
      <div class=" text-right col-lg-6 col-md-6 mb-4 mb-md-0">
        

        <ul class=" list-unstyled">
          <li>
            <a href="#!" class="text-white">HOME</a>
          </li>
          <li>
            <a href="#!" class="text-white">ABOUT US</a>
          </li>
          <li>
            <a href="#!" class="text-white">CARS</a>
          </li>
          <li>
            <a href="#!" class="text-white">CONTACT US</a>
          </li>
           <li>
            <a href="admin/adminlogin.php" class="text-white">ADMIN</a>
          </li>

        </ul>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © Copyright 2022, All Rights Reserved
    
  </div>
  <!-- Copyright -->
</footer>


  <script src="js/sweetalert.min.js"></script>
    <script>
      swal({
  title: "Good job!",
  text: "Your Booking is canceled successfully!",
  icon: "success",
  button: "Aww yiss!",
});
    </script>


	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>