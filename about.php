<?php include('header.php'); ?>
<?php include('connection.php'); ?>
<br>
<div>
	<marquee behavior="scroll" direction="left" height="10%" scrollamount="10">
		<h2>Welcome to Indian Railways</h2>
	</marquee>
</div>
<br>
<table id="customers">
  <tr>
    <th>Trains</th>
    <th>No of Sleeper Coach</th>
    <th>No of AC Coach</th>
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
