<?php
session_start();
$con=mysqli_connect('localhost','root');
if($con){
	echo "Connection successful";
}
else{
	echo "no Connection";
}

$db=mysqli_select_db($con, 'myproject');
 
    $adminuser = $_POST['user'];  
    $adminpassword = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $adminuser = stripcslashes($adminuser);  
        $adminpassword = stripcslashes($adminpassword);  
        $adminuser = mysqli_real_escape_string($con, $adminuser);  
        $adminpassword = mysqli_real_escape_string($con, $adminpassword);  
      
        $sql = "select *from adminlogin where adminuser = '$adminuser' and adminpassword = '$adminpassword'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
             header('location:index1.php') ;
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";

        }     
?>  

