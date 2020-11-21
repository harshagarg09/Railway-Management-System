<?php include('header.php') ?>
<?php include('connection.php') ?>

				<form action="trainTableAdd.php" method="post" onsubmit="return confirm('Are you sure you want to submit?')">
                <input type="text" name="SleeperCoach" placeholder="Enter Number of Sleeper Coaches" required>
                <input type="text" name="ACcoach" placeholder="Enter Number of AC Coaches" required>
                <input class="btn" type="submit" name="submit" value="Submit">
            </form>
</body>
</html>