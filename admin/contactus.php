
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
				<h4>Enquiries</h4>
			</div>
			<div class="card-body">
				<table class="table table-bordered   border-dark table-hover table-warning ">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Phone Number</th>
							<th>Message</th>

						</tr>
					</thead>
					<tbody>
						<?php
						     $enq = getAll("contact");
						     if(mysqli_num_rows($enq)>0)
						     {
						     	foreach ($enq as $item) 
						     	{
						     		?>
						     		 <tr>
						     		 	<td><?=$item['Id']; ?></td>
						     		 	<td><?=$item['fullname']; ?></td>
						     		 	<td><?=$item['email']; ?></td>
						     		 	<td><?=$item['phonenumber']; ?></td>
						     		 	<td><?=$item['message']; ?></td>
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