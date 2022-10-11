<?php
$con = mysqli_connect('localhost','root');
if($con){
	echo "Connection successful";
}else{
	echo "no Connection";
}
 function redirect($url,$message)
 {
 	$_SESSION['message'] = $message;
 	header('Location: '.$url);
 	exit();
 }
mysqli_select_db($con, 'myproject');
$carname = $_POST['carname'];
$name = $_POST['name']; 
$email = $_POST['email']; 
$phonenumber = $_POST['phonenumber']; 
$address= $_POST['address']; 
$pickupdate= date('d-m-y',strtotime($_POST['pickupdate'])); 
$returndate= date('d-m-y',strtotime($_POST['returndate']));


$query = "insert into registrationform (carname,name,email,phonenumber,address,pickupdate,returndate)
values ('$carname','$name','$email','$phonenumber','$address','$pickupdate','$returndate')";

$query_run = mysqli_query($con,$query);
if(query_run)
	{

		redirect("order.php?phonenumber=$phonenumber","order deleted successfully");
    }
    else
       {
    	 redirect("reg.php" ,"something went wrong");
       }
?>