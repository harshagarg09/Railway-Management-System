<?php include_once('../connection.php'); ?>

   <?php 
    if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
    //session_start(); 
    if(!isset($_SESSION['username'])){
        header('location:../register-login.php');
    }

?>
<?php 
    $user = $_SESSION['username'];
	$query = "SELECT ticket.pnr as pnr,pnr_train.trainid as trainid,ticket.date as date,COUNT(*) as count FROM bookings_history,pnr_train,ticket where bookings_history.pnr=pnr_train.pnr AND pnr_train.pnr=ticket.pnr AND bookings_history.username='$user' GROUP BY ticket.pnr,pnr_train.trainid,ticket.date ";
    $result=mysqli_query($conn, $query); 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title> Past bookings </title> 
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

	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>MY PAST BOOKINGS</h2></th> 

		</tr><tr> 
			  <th> PNR </th>
			  <th> Trainid </th> 
			  <th> Number of Passengers </th> 
			  <th> Date </th> 
			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['pnr']; ?></td> 
		<td><?php echo $rows['trainid']; ?></td> 
		<td><?php echo $rows['count']; ?></td> 
		<td><?php echo $rows['date']; ?></td> 

		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</body> 
	</html>