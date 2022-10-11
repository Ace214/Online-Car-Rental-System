
		<?php 
		include('functionmain.php');
		
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
          <a class="nav-link active" aria-current="page" href="model.php">CARS</a>
       </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contact.php">CONTACT US</a>
       </li>
 </ul>
</nav>

		<div class="container ">
			<div class="row">
				<div class="col-md-12">
					<div class="card-header text-center text-primary dark_bg ">
						<h3><b>Booking Details</b></h3>
					</div>
					<br>
					<div class="text-center text-success">
						<h4>Thank you for choosing us! We will contact you soon. </h4>
					</div>
				
					<br>
					<br>
						<table table border="0"  class="display table table-bordered border-dark table-hover table-striped table-warning">
							<thead>
								<tr>
									<th>ID</th>
									<th>Car Name</th>
									<th>Name</th>
									<th>Email</th>
							        <th>Phonenumber</th>
									<th>Address</th>
									<th>PickupDate</th>
									<th>ReturnDate</th>
									<th>Booking</th>
								</tr>
							</thead>
							<tbody>
								 <?php
							
                           $phonenumber= $_GET['phonenumber'];
                          
 
                       $book = getByname($phonenumber);
                       if(mysqli_num_rows($book) > 0)
                                {
                                   foreach($book as $cars)
                                 {
                                     ?>
    
								     		 <tr class="table-warning table-bordered border-dark">
								     		 	<td><?=$cars['Id']; ?></td>
								     		 	<td><?=$cars['carname']; ?></td>
								     		 	<td><?=$cars['name']; ?></td>
								     		 	<td><?=$cars['email']; ?></td>
								     		 	<td><?=$cars['phonenumber']; ?></td>
								     		 	<td><?=$cars['address']; ?></td>
								     		 	<td><?=$cars['pickupdate']; ?></td>
								     		 	<td><?=$cars['returndate']; ?></td>
								     		 	<td>
								     		 		<form action="cancel.php" method="POST" >
								     	<input type="hidden" name="book" value="<?=$cars['Id']; ?>">
								    <button type="submit" class="btn btn-danger"  name="removebtn" >Cancel Booking</button>
								     	</form>
								     </td>

								     		 	<?php
								     	
								        }
								     }
								     else
								     {
								     	echo "No records found";
								     }
								 
								 
								     ?>
								     
								</tr>
							         
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
		