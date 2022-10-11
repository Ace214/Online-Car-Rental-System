
<?php include('includes/header.php');?>

<div class="container">
	<div class="row">
		<div class="card">
			<div class="card-header text-center ">
				<h4>Add categories</h4>
			</div>
  <div class="card-body">
    <form action="insertcode.php" method="POST" >
    	<div class="row">
    		
				   <div class="col-md-6 mb-4">
                       	<label for="" >Car Models </label>
				       <input type="text" name="name" placeholder="Enter Car Models" class="form-control">
				   </div>
				   
				   <div class="col-md-12">
                       	
				       <button type="submit" name="addcategorybtn" class="btn btn-danger">Save</button>
				   </div>
				</div>
			</form>



			</div>
		</div>
	</div>
</div>
</div>
<?php include('includes/footer.php');?>












