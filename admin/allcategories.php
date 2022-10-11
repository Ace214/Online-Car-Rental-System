
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
				<h4>All categories</h4>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
						</tr>
					</thead>
					<tbody>
						<?php
						     $category = getAll("categories");
						     if(mysqli_num_rows($category)>0)
						     {
						     	foreach ($category as $item) 
						     	{
						     		?>
						     		 <tr>
						     		 	<td><?=$item['Id']; ?></td>
						     		 	<td><?=$item['name']; ?></td>
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