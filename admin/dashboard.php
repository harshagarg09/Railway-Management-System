<?php session_start();?>
<?php include('header.php') ?>
<?php include('connection.php') ?>
<?php
	
    if(isset($_POST['submit'])){
       
        $trainNo = $_POST['trainNo'];
		
		$_SESSION['trainNo'] = $trainNo;
		
		$check_user = " SELECT * FROM train WHERE db_trainNo = '$trainNo'";
                
        $result = mysqli_query($conn, $check_user);
        
        if(mysqli_num_rows($result)>0)
		{
			header('location:AddCoach.php');
        }
        else
		{
			$_SESSION['status'] ="No Such Train Exists";
			$_SESSION['text'] = "Try Again";
			$_SESSION['status_code'] = "Warning";
			//echo "Error";
		}		
    }
?>

            <form action="dashboard.php" method="post" onsubmit="return confirm('Are you sure you want to submit?')">
                <input type="text" name="trainNo" placeholder="Enter train no" required>
                <input class="btn" type="submit" name="submit" value="Submit">
            </form>
</body>
</html>
<?php include('scripts.php');?>
