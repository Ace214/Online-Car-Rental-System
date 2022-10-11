
<?php 
session_start();
include('includes/header.php');
include('config/dbcon.php');
include('functions/myfunctions.php');

?>

<div class="container">
	<div class="row">
		<?php
		  if(isset($_GET['id']))
		  {


		  	  $Id = $_GET['id'];

		  	  $cars= getByID("cars",$Id);

		  	  if(mysqli_num_rows($cars)>0)
		  	  {
             
             $data= mysqli_fetch_array($cars);
		  	  	 ?>
	 <div class="card">
			<div class="card-header text-center ">
				<h4>Edit CARS</h4>
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
						     		 <option value="<?=$item['Id'];?>" <?=$data['category_id'] == $item['Id']?'selected':''?> ><?=$item['name'];?></option>
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
            <input type="hidden" name="car_id" value="<?=$data['Id']?>">
				   <div class="col-md-6 mb-4">
                       	<label for="" >Car Name </label>
				       <input type="text" name="carname" value="<?=$data['carname']?>" placeholder="Enter Car Name" class="form-control">
				   </div>
				   <div class="col-md-6 mb-4">
                       	<label for="" >Fuel</label>
				       <input type="text" name="fuel" value="<?=$data['fuel']?>" placeholder="Petrol/Diesel" class="form-control">
				   </div>
				   <div class="col-md-6 mb-4" >
                       	<label for="" >Model Year</label>
				       <input type="text" name="modelyear" value="<?=$data['modelyear']?>" placeholder="Year" class="form-control">
				   </div>
				   <div class="col-md-6 mb-4" >
                       	<label for="" >Transmission </label>
				     <input type="text" name="transmission" value="<?=$data['transmission']?>" placeholder="Manual/Auotomatic" class="form-control">
				   </div>
				   <div class="col-md-6 mb-4">
                       	<label for="" >30 days or more</label>
				       <input type="text" name="monthly" value="<?=$data['monthly']?>" placeholder="Price" class="form-control">
				   </div>
				   <div class="col-md-6 mb-4">
                       	<label for="" >Price per day </label>
				       <input type="text" name="priceperday" value="<?=$data['priceperday']?>" placeholder="Price" class="form-control">
				   </div>
				   <div class="col-md-6 mb-4">
                       	<label for="" >Upload Image</label>
                       	<input type="hidden" name="oldimage" value="<?=$data['image']?>">
				       <input type="file" name="image"   class="form-control mb-2">
				       <label for="" >Current Image</label>
				       <img src="uploads/<?=$data['image']?>" height="50px" width="50px">
				   </div>
				   <div class="col-md-12">
                       	
				       <button type="submit" name="update" class="btn btn-danger">Update</button>
				   </div>
				</div>
			</form>

			</div>
		           </div>
	           
		          <?php
		      }
		      else{
		      	echo "product not found for given id" ;
		      }
		  }
		  else{
		  	echo "Id missing";
		  }
		?>
	</div>
</div>
</div>
<?php include('includes/footer.php');?>












