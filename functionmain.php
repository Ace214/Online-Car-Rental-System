<?php 
session_start();
$host = "localhost";
$username = "root";
$password = "";
$database ="myproject";

// Create connection
$con =  mysqli_connect($host, $username, $password,$database);


function getAll($table)
 {
  global $con;
  $query= " SELECT * FROM $table";
  return $query_run = mysqli_query($con,$query);
 }

  function getByID($table,$Id)
 {
   global $con;
    $query ="SELECT * FROM $table WHERE Id='$Id' LIMIT 1";
   return $query_run = mysqli_query($con,$query);
 }
  function getByname($phonenumber)
 {
   global $con;
    $query ="SELECT * FROM registrationform WHERE phonenumber='$phonenumber'";
   return $query_run = mysqli_query($con,$query);
 }

 function getbycar($category_id)
 {
   global $con;
  $query= " SELECT * FROM cars WHERE category_id='$category_id' ";
  return $query_run = mysqli_query($con,$query);
 }
  function getbyorder($id)
 {
   global $con;
  $query= " SELECT * FROM registrationform WHERE Id='$id' ";
  return $query_run = mysqli_query($con,$query);
 }
function redirect($url,$message)
 {
  $_SESSION['message'] = $message;
  header('Location: '.$url);
  exit();
 }
?>