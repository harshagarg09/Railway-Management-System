<?php session_start();?>
<?php include('header.php') ?>

            <form action="trainAdd.php" method="post" onsubmit="return confirm('Are you sure you want to submit?')">
                <input type="text" name="name" placeholder="Enter train no" required>
                <input type="date" name="date" placeholder="Enter Date" required>
                <input type="text" name="source" placeholder="Enter Source Station" required>
				<input type="text" name="name" placeholder="Enter destination Station" required>
                <input class="btn" type="submit" name="submit" value="Submit">
            </form>
</body>
</html>
