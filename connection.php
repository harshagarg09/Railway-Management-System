<?php

  session_start();
  $server="localhost"; 
  $username="root";
  $password="";
  $database="railway_management_system";
  
  $conn=mysqli_connect($server,$username,$password,$database);
  
  if($conn==false){
	  echo "Connection Failed to database";
  }
  
?>  