<?php

  $server="localhost"; 
  $username="root";
  $password="";
  $database="railway";
  
  $conn=mysqli_connect($server,$username,$password,$database);
  
  if($conn==false){
	  echo "Connection Failed to database";
  }
  
?>  