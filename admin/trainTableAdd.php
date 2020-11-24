<?php session_start() ?>
<?php 
	include('header.php'); 
	include('connection.php');
	
	$var_value = $_SESSION['varname'];
	
	if(isset($_POST['submit'])){
       
        $date = $_POST['date'];
		$SleeperCoach = $_POST['SleeperCoach'];
		$ACcoach = $_POST['ACcoach'];
		$trainNo = $var_value;
		$AC = "AC";
		$notBook = 0;
		$sleeper = "SL";
		
		$today = date( "Y-m-d");
		$newDate = date('Y-m-d', strtotime('+15 days', strtotime($today)));
		$dateTimestamp1 = strtotime($date); 
		$dateTimestamp2 = strtotime($today);
		$dateTimestamp3 = strtotime($newDate);
		if($dateTimestamp1<$dateTimestamp2)
		{?>
			<h2 align ="center">
			<?php echo "Entered the Wrong Date";
			?></h2>
			<?php
			//header('location:trainTableAdd.php');
			die();
		}
		if($dateTimestamp1>$dateTimestamp3)
		{?>
			<h2 align ="center">
			<?php echo "This much advance release of train is not possible";
			?></h2>
			<?php
			//header('location:trainTableAdd.php');
			die();
		}
		$check_user = " SELECT * FROM traincoach WHERE db_trainNo = '$trainNo' and db_date ='$date' ";
                
        $res1 = mysqli_query($conn, $check_user);
        
        if(mysqli_num_rows($res1)>0)
		{
			?>
			<h2> "Already the train with the given number exists";
			</h2>
			<?php
			die();
			//header('location:trainTableAdd.php');
        }
		
		$query = "INSERT INTO `traincoach` (`db_trainNo`,`db_AC`,`db_Sleeper`,`db_date`) VALUES ('$trainNo','$ACcoach','$SleeperCoach','$date')";
					
		$res = mysqli_query($conn,$query);
		if (!$res) {
			
			die('Invalid query: ' . mysqli_error($conn));
		}
		
		if (mysqli_query($conn, $sqlq)) {
			
			for($j = 1;$j<=$ACcoach;$j++){
				
				for($i = 1; $i<19; $i++) {
					
					$sql="INSERT INTO `$trainNo` ( `db_coachType`,`db_BerthNo`,`db_bookStatus`,`db_coachNo`,`db_date`) VALUES ('$AC','$i','$notBook','$j','$date')";
					
					$result = mysqli_query($conn,$sql);
				
					if (!$result) {
						echo mysqli_error($conn);
						die();
					}
				}
			}
			for($j = 1;$j<=$SleeperCoach;$j++){
				
				for($i = 1; $i<25; $i++) {
					
					$sql="INSERT INTO `$trainNo` ( `db_coachType`,`db_BerthNo`,`db_bookStatus`,`db_coachNo`,`db_date`) VALUES ('$sleeper','$i','$notBook','$j','$date')";
					
					$result = mysqli_query($conn,$sql);
				
					if (!$result) {
						echo mysqli_error($conn);
						die();
					}
				}
			}
		
		} 
		else {
		  echo "Error : " . mysqli_error($conn);
		}
		header('location:success.php');
    }
	else
		header('location:dashboard.php');
?>
