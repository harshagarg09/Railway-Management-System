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
    $pnr = $_SESSION['pnr'];
	$query = "SELECT * FROM `ticket` where pnr='$pnr' ";
    $result=mysqli_query($conn, $query); 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title> Display Ticket </title> 
<style>
table {
position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);

}
</style>
	</head> 
	<body> 
   <?php include('user-header.php'); ?>
<h1>Ticked booked Successfully!</h1>
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="5"><h2>MY TICKET PNR : <?php echo $_SESSION['pnr']; ?></h2><h2>TrainID : <?php echo $_SESSION['trainid']; ?></h2><h3>DATE OF JOURNEY : <?php echo $_SESSION['depart']; ?></h3><h3>Coach : <?php echo $_SESSION['coaches']; ?></h3></th> 

		</tr> <tr>
			  <th> Name </th>
			  <th> Age </th> 
			  <th> Gender </th> 
			  <th> Coach No. </th> 
			  <th> Berth No. </th> 
			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_array($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['name']; ?></td> 
		<td><?php echo $rows['age']; ?></td> 
		<td><?php echo $rows['gender']; ?></td> 
		<td><?php echo $rows['coachNo']; ?></td> 
		<td><?php echo $rows['berthNo']; ?></td> 

		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</body> 
	</html>