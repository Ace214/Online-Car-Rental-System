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
<!--Contact-us-->
<section class="my-4">
  <div class="py-4 ">
     <h3 class="text-center display-4 font-weight-bolder text-primary">Contact Us</h3>
   </div>
        <div class="w-50 m-auto">
          <form action="contactcode.php" method="post">
            <div class="form-group">
              <label class="control-label">Full Name <span>*</span></label>
              <input type="text" name="fullname" class="form-control white_bg" id="fullname" required>
            </div>
            <div class="form-group">
              <label class="control-label">Email Address <span>*</span></label>
              <input type="email" name="email" class="form-control white_bg" id="email" required>
            </div>
            <div class="form-group">
              <label class="control-label">Phone Number <span>*</span></label>
              <input type="text" name="phonenumber" class="form-control white_bg" id="phonenumber" required maxlength="10" pattern="[0-9]+">
            </div>
            <div class="form-group">
              <label class="control-label">Message <span>*</span></label>
              <textarea class="form-control white_bg" name="message" rows="4" required></textarea>
            </div>
            <div class="form-group">

              <button class="btn btn-danger" type="submit" >Send Message </button>
            </div>
          </form>
        </div>
    </section>
      <!--Contact-us ends here-->
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

     

