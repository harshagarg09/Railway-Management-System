<?php

  $server="localhost"; 
  $username="root";
  $password="";
  $database="hostel";
  
  $conn=mysqli_connect($server,$username,$password,$database);
  
  if($conn==false){
	  echo "Connection Failed to database";
  }
  
?>  