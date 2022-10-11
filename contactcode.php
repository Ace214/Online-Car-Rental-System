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
$fullname = $_POST['fullname'];
$email = $_POST['email']; 
$phonenumber = $_POST['phonenumber']; 
$message= $_POST['message']; 

$query = "insert into contact (fullname,email,phonenumber,message) values ('$fullname','$email','$phonenumber','$message')";

$query_run = mysqli_query($con,$query);
if(query_run)
	{

		redirect("index.php","order deleted successfully");
    }
    else
       {
    	 redirect("contact.php" ,"something went wrong");
       }
?>