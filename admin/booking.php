
		<?php 
		session_start();
		include('includes/header.php');
		include('config/dbcon.php');
		include('functions/myfunctions.php');

		?>

		<div class="container ">
			<div class="row">
				<div class="col-md-12">
				
					<div class="card-header text-center ">
						<h4>Booking Details</h4>
					</div>
					
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
									<th>RemoveBooking</th>
								</tr>
							</thead>
							<tbody>
								<?php
								     $book = getAll("registrationform");
								     if(mysqli_num_rows($book)>0)
								     {
								     	foreach ($book as $item) 
								     	{
								     		?>
								     		 <tr class="table-warning table-bordered border-dark">
								     		 	<td><?=$item['Id']; ?></td>
								     		 	<td><?=$item['carname']; ?></td>
								     		 	<td><?=$item['name']; ?></td>
								     		 	<td><?=$item['email']; ?></td>
								     		 	<td><?=$item['phonenumber']; ?></td>
								     		 	<td><?=$item['address']; ?></td>
								     		 	<td><?=$item['pickupdate']; ?></td>
								     		 	<td><?=$item['returndate']; ?></td>
								     		 	<td>
								     		<form action="insertcode.php" method="POST" >
								     	<input type="hidden" name="book" value="<?=$item['Id']; ?>">
								    <button type="submit" class="btn btn-danger"  name="removebtn" >Remove</button>
								     	</form>
								     </td>

								</tr>
							         <?php
								     	}
								     }
								     else
								     {
								     	echo "No records found";
								     }
								     ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		</div>
		<?php include('includes/footer.php');?>