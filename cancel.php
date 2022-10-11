
<?php
include('functionmain.php');
if(isset($_POST['removebtn']))
{
	$remove= mysqli_real_escape_string($con, $_POST['book']);
	$delete_query = "DELETE  FROM registrationform where Id='$remove'";
	$delete_query_run=mysqli_query($con,$delete_query);

	if($delete_query_run)
	{

		redirect("index.php","order deleted successfully");
    }
    else
       {
    	 redirect("order.php" ,"something went wrong");
       }

	
}

?>