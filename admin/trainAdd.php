<?php include('header.php') ?>
<?php include('connection.php') ?>
<?php session_start() ?>
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
			echo "No such train exists";
			header('location:dashboard.php');
		}		
    }
?>
