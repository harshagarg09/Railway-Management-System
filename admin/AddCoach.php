<?php include('header.php') ?>
<?php include('connection.php') ?>
<?php session_start() ?>
<?php 
		$var_value = $_SESSION['trainNo']; 
		$_SESSION['varname'] = $var_value;
?>

			<form action="trainTableAdd.php" method="post" onsubmit="return confirm('Are you sure you want to submit?')">
				<input type="date" name="date" placeholder="Enter Date" required>
                <input type="text" name="SleeperCoach" placeholder="Enter Number of Sleeper Coaches" required>
                <input type="text" name="ACcoach" placeholder="Enter Number of AC Coaches" required>
                <input class="btn" type="submit" name="submit" value="Submit">
            </form>
</body>
</html>