
		<?php 
		session_start();
		include('includes/header.php');
		include('config/dbcon.php');
		include('functions/myfunctions.php');

		?>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<div class="card"> 
					<div class="card-header text-center ">
						<h4>All cars</h4>
					</div>
					<div class="card-body">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Car Name</th>
									<th>Price per Day</th>
									<th>Image</th>
									
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php
								     $cars = getAll("cars");
								     if(mysqli_num_rows($cars)>0)
								     {
								     	foreach ($cars as $item) 
								     	{
								     		?>
								     		 <tr>
								     		 	<td><?=$item['Id']; ?></td>
								     		 	<td><?=$item['carname']; ?></td>
								     		 	<td><?=$item['priceperday']; ?></td>
								     		 	<td>
								     		 		<img src="uploads/<?=$item['image']; ?>" width="50px" height="50px">
								     		 	</td>

								     		 	
					
								     		 	<td>
								     		 		<a href="editcar.php?id=<?=$item['Id']; ?>" class="btn btn-primary">Edit</a>
								     		 	</td>
								     		 
								     		 	<td>	
								     <form action="insertcode.php" method="POST" >
								     	<input type="hidden" name="car_id" value="<?=$item['Id']; ?>">
								    <button type="submit" class="btn btn-danger"  name="deletebtn" >Delete</button>
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