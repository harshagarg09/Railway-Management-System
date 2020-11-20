<?php include('header.php') ?>
<?php include('connection.php') ?>

<?php
	
    if(isset($_POST['submit'])){
       
        $trainNo = $_POST['trainNo'];
        $date = $_POST['date'];
        $source = $_POST['source'];
        $destination = $_POST['destination'];
		
		$check_user = " SELECT * FROM train WHERE db_trainNo = '$trainNo' AND db_date = '$date' AND db_source ='$source' AND db_destination = '$destination' ";
                
        $result = mysqli_query($conn, $check_user);
        
        if(mysqli_num_rows($result)>0)
		{
			//I want to show a pop up that already entry exist;
            header('location:dashboard.php');
        }
        
		
        $qur="INSERT INTO `train` (`db_trainNo`,`db_date`,`db_source`,`db_destination`) VALUES ('$trainNo','$date','$source','$destination')"; 

        $check=mysqli_query($conn,$qur);
                
    }
?>
