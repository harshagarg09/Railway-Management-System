<?php session_start();?>
<?php include('header.php') ?>

            <form action="trainAdd.php" method="post" onsubmit="return confirm('Are you sure you want to submit?')">
                <input type="text" name="trainNo" placeholder="Enter train no" required>
                <input class="btn" type="submit" name="submit" value="Submit">
            </form>
</body>
</html>