<?php

session_start();

include('config/dbcon.php');
include('functions/myfunctions.php');

if(isset($_POST['addcategorybtn']))
{
	$name = $_POST['name'];
	
	$cate_query= "INSERT INTO categories (name) VALUES('$name')";

	$cate_query_run = mysqli_query($con,$cate_query);

	if($cate_query_run)
	{
		 
		 redirect("addcategory.php","category added successfully");
	}
    else
    {
    	redirect("addcategory.php","something went wrong");
    }
}


elseif(isset($_POST['insertbtn']))
{
	$category_id = $_POST['category_id'];
	$carname = $_POST['carname'];
	$fuel = $_POST['fuel'];
	$modelyear = $_POST['modelyear'];
	$transmission = $_POST['transmission'];
	$monthly = $_POST['monthly'];
	$priceperday = $_POST['priceperday'];
	$image = $_FILES['image']['name'];

	$path="uploads";
	$image_ext= pathinfo($image, PATHINFO_EXTENSION);
	$filename = time().'.'.$image_ext;

	$product_query= "INSERT INTO cars (category_id,carname,fuel,modelyear,transmission,monthly,priceperday,image)
	VALUES('$category_id','$carname','$fuel','$modelyear','$transmission','$monthly','$priceperday','$image')";

	$product_query_run = mysqli_query($con,$product_query);

	if($product_query_run)
	{
		 move_uploaded_file($_FILES['image']['tmp_name'],uploads.'/'.$_FILES['image']['name']);
		 redirect("insert.php","category added successfully");
	}
    else
    {
    	redirect("insert.php","something went wrong");
    }

}
elseif(isset($_POST['update']))
{
	$car_id=$_POST['car_id'];
	$category_id = $_POST['category_id'];
	$carname = $_POST['carname'];
	$fuel = $_POST['fuel'];
	$modelyear = $_POST['modelyear'];
	$transmission = $_POST['transmission'];
	$monthly = $_POST['monthly'];
	$priceperday = $_POST['priceperday'];
	$image = $_FILES['image']['name'];

	$path="uploads";

	$newimage= $_FILES['image']['name'];
	$oldimage=$_POST['oldimage'];

	if($newimage != "")
	{
	
	$update_filename =$_FILES['image']['name'];
  }
  else
  {
  	$update_filename= $oldimage;
  }


     $update_query="UPDATE cars SET category_id='$category_id', carname='$carname', fuel='$fuel', modelyear='$modelyear', transmission='$transmission',monthly='$monthly',priceperday='$priceperday',image='$update_filename' WHERE id='$car_id'";
     $update_query_run = mysqli_query($con, $update_query);
    
	   if($update_query_run)
	     {
		     if($_FILES['image']['name'] != "")
		       {
		          move_uploaded_file($_FILES['image']['tmp_name'],uploads.'/'.$_FILES['image']['name']);
		          if(file_exists("uploads".$oldimage))
		            {
		 	             unlink("uploads".$oldimage);
		            }
	          }

		         redirect("allcars.php","car updated successfully");
	     }
        else
       {
    	       redirect("allcars.php" ,"something went wrong");
       }

}
elseif(isset($_POST['deletebtn']))
{
	$car_id= mysqli_real_escape_string($con, $_POST['car_id']);

	$car_query="SELECT * FROM cars where id='$car_id'";
	$car_query_run=mysqli_query($con,$car_query);
	$car_data=mysqli_fetch_array($car_query_run);
	$image = $car_data['image'];


	$delete_query = "DELETE  FROM cars where id='$car_id'";
	$delete_query_run=mysqli_query($con,$delete_query);

	if($delete_query_run)
	{

		if(file_exists("uploads".$image))
		            {
		 	             unlink("uploads".$image);
		            }
		redirect("allcars.php","car deleted successfully");
    }
    else
       {
    	 redirect("allcars.php" ,"something went wrong");
       }

	
}
elseif(isset($_POST['removebtn']))
{
	$remove= mysqli_real_escape_string($con, $_POST['book']);
	$delete_query = "DELETE  FROM registrationform where Id='$remove'";
	$delete_query_run=mysqli_query($con,$delete_query);

	if($delete_query_run)
	{

		redirect("booking.php","order deleted successfully");
    }
    else
       {
    	 redirect("allcars.php" ,"something went wrong");
       }

	
}

?>