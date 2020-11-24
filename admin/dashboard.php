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
<br>
<br>
<h2 align='center'>Information about the existing Trains </h2>
<table id="customers">
  <tr>
    <th>Trains</th>
    <th>Max Sleeper Coaches</th>
    <th>Max AC Coaches</th>
  </tr>
  <?php 
	$qur="SELECT * FROM `train`";
	$res=mysqli_query($conn,$qur); 
	if(mysqli_num_rows($res)>0){  
		while($data=mysqli_fetch_array($res)){ ?>
			<tr>
			<td><?php echo $data['db_trainNo']; ?></td>
			<td><?php echo $data['db_Sleeper']; ?></td>
			<td><?php echo $data['db_AC']; ?></td>
			</tr>	
	<?php }  
	} ?>  
</table>
</body>
</html>
<?php include('scripts.php');?>
