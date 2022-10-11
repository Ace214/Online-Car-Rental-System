
<?php 
session_start();
include('includes/header.php');
include('config/dbcon.php');
include('functions/myfunctions.php');

?>

<div class="container">
	<div class="row">
		<div class="card">
			<div class="card-header text-center ">
				<h4>INSERT CARS</h4>
			</div>
  <div class="card-body">
    <form action="insertcode.php" method="POST" enctype="multipart/form-data">
    	<div class="row">
    		<div class="col-md-6">
                       	<label for="" >Select Categories</label>
                        <select class="form-select" name="category_id">
                        <option selected>Categories</option>
                        <?php
						     $category = getAll("categories");
						    if(mysqli_num_rows($category)>0)
						     {
						     	foreach ($category as $item) 
						     	{
						     		?>
						     		 <option value="<?=$item['Id'];?>"><?=$item['name'];?></option>
						     		 <?php
						     	}
						     }
						     else
						     {
						     	echo "No records found";
						     }
						     ?>
       
                    </select>
                    </div>

				   <div class="col-md-6 mb-4">
                       	<label for="" >Car Name </label>
				       <input type="text" name="carname" placeholder="Enter Car Name" class="form-control">
				   </div>
				   <div class="col-md-6 mb-4">
                       	<label for="" >Fuel</label>
				       <input type="text" name="fuel" placeholder="Petrol/Diesel" class="form-control">
				   </div>
				   <div class="col-md-6 mb-4" >
                       	<label for="" >Model Year</label>
				       <input type="text" name="modelyear" placeholder="Year" class="form-control">
				   </div>
				   <div class="col-md-6 mb-4" >
                       	<label for="" >Transmission </label>
				     <input type="text" name="transmission" placeholder="Manual/Auotomatic" class="form-control">
				   </div>
				   <div class="col-md-6 mb-4">
                       	<label for="" >30 days or more</label>
				       <input type="text" name="monthly" placeholder="Price" class="form-control">
				   </div>
				   <div class="col-md-6 mb-4">
                       	<label for="" >Price per day </label>
				       <input type="text" name="priceperday" placeholder="Price" class="form-control">
				   </div>
				   <div class="col-md-6 mb-4">
                       	<label for="" >Upload Image</label>
				       <input type="file" name="image" class="form-control">
				   </div>
				   <div class="col-md-12">
                       	
				       <button type="submit" name="insertbtn" class="btn btn-danger">Save</button>
				   </div>
				</div>
			</form>



			</div>
		</div>
	</div>
</div>
</div>
<?php include('includes/footer.php');?>












