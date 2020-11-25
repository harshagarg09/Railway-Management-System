<?php include_once('../connection.php'); ?>

   <?php 
    if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
    //session_start(); 
    if(!isset($_SESSION['username'])){
        header('location:register-login.php');
    }

?>
<?php
	if(isset($_POST['bookticket'])){
        $pnames = $_POST['pnames'];
        $page = $_POST['page'];
        $pgender = $_POST['pgender'];

		$query_pnr = "SELECT MAX(pnr) as max FROM pnr_train ";
		$generate_pnr = mysqli_query($conn, $query_pnr);
		$row = mysqli_fetch_array($generate_pnr );
		$trainid = $_SESSION['trainid'];
		$date = $_SESSION['depart'];
		$numpassenger = $_SESSION['numpassenger'];
		$coachType = $_SESSION['coaches'];
        $pnr = $row['max']+1;
		$_SESSION['pnr'] = $pnr;
        $sql = "INSERT INTO `pnr_train`(`pnr`,`trainid`) VALUES('$pnr','$trainid') ";
		$check = mysqli_query($conn,$sql);
        
                if($check){
                    echo "Saved successfull";
                }
                else{
                   // echo "ERRRorr : $sql <br> $conn->error";
                    echo "ERROR !!!PNR already exists!";
                }	

				 

		$AllBooked = TRUE;
		for($j=0;$j<$numpassenger;$j++){
			$query_bookseat = "SELECT * FROM `".$trainid."` where db_date='$date' AND db_coachType='$coachType' AND db_bookStatus=0 LIMIT 1";
			$book = mysqli_query($conn, $query_bookseat);
			//echo mysqli_num_rows($book);
			$row = mysqli_fetch_array($book);
			$berthNo = $row['db_BerthNo'];
			$coachNo = $row['db_coachNo'];
			$query_bookseat = "UPDATE `".$trainid."` SET db_bookStatus=1 WHERE db_coachType='$coachType' AND db_BerthNo='$berthNo' AND db_coachNo='$coachNo' AND db_date='$date'";
			$check = mysqli_query($conn, $query_bookseat);
			if($check){
					$sql = "INSERT INTO `ticket`(`pnr`,`date`,`name`,`age`,`gender`,`coachNo`,`berthNo`) VALUES('$pnr','$date','$pnames[$j]','$page[$j]','$pgender[$j]','$coachNo','$berthNo')";
					$check = mysqli_query($conn,$sql);
        
					if($check){
						echo "BOOKED successfull";
					}
					else{
					   // echo "ERRRorr : $sql <br> $conn->error";
						echo "ERROR !!!Not Booked!";
						$AllBooked = false;
					}
					
				
				}
                else{
                   // echo "ERRRorr : $sql <br> $conn->error";
                    echo "ERROR !!!NOT BOOKED!";
					$AllBooked = false;
                }

		}
		if($AllBooked){
					$username = $_SESSION['username'];
					$sql = "INSERT INTO `bookings_history`(`username`,`pnr`) VALUES('$username','$pnr')";
					$check = mysqli_query($conn,$sql);
        
					if($check){
						echo "BOOKED successfull";
					}
					else{
					   // echo "ERRRorr : $sql <br> $conn->error";
						echo "ERROR !!!Not Booked!";
						$AllBooked = false;
					}
			header('location:displayticket.php');
		}
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Home Page</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
 <style>
        *{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}
       
        .outside{
            width: 50%;
            height: 100%;
            display: flex;
            align-items: center;

            
        }
      .container{
            height: auto;
            width: 100%;
            display: flex;
             padding: 20px;
    margin: auto;
          margin-left: 500px;
        }
       
form{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    
}
input{
    
    border: 1px solid black;
    outline: none;
    border-radius: 31px;
    font-size: 13px;
    margin: 9px;
    padding: 9px;
}
.option{
    
    border: 1px solid black;
    outline: none;
    border-radius: 31px;
    font-size: 13px;
    margin: 9px;
    padding: 9px;
}

.btn{
    width: 30%;
    color: white;
    background: darkred;
    padding: 13px 30px;
    font-size: 15px;
    border: 2px solid white;
    border-radius: 17px;
    cursor: pointer;
    margin-left: 535px;
}
        .btn:hover {
  background-color: #ddd;
  color: black;
}
    </style>

</head>
<body>
   <?php include('user-header.php'); ?>

    <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
    <h2>BOOK UR TICKET FOR <?php echo $_SESSION['trainid']; ?> DATE : <?php echo $_SESSION['depart'];?>  NUM OF PASSENGERS :<?php echo $_SESSION['numpassenger']; ?>
    COACHES : <?php echo $_SESSION['coaches']; ?> </h2>
    <div class="outside">
	<div class="login">
    <form action="bookticket.php" method="post" onsubmit="return confirm('Are you sure you want to book?')">
    <?php for($i=0;$i<$_SESSION['numpassenger'];$i++){
    ?>
    
                <br>
                <div class="container">
                    <h1>P<?php echo $i+1; ?></h1>
                <input class="form-control" type="text" name="pnames[]" placeholder="Name" required>
                <input class="form-control" type="number" name="page[]" placeholder="Age" required>
          <!--      <input class="form-control" type="text" name="pgender[]" placeholder="Gender" required>'''-->
                <select class="option" name="pgender[]" required>
                  <option disabled="disabled" selected="selected" name="coach"  value="">-----  Gender  -----</option>
                  <option value="male"> Male </option>
                  <option value="female"> Female </option>
                  <option value="other"> Other </option>

                </select>
                </div>
                
    <?php
}
?>
                <input class="btn" type="submit" name="bookticket" value="Book Ticket">

            
            </form>
       </div>

    </div>

</body>
</html> 