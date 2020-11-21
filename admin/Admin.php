 <?php include_once('connection.php'); ?>
 <?php include_once('header.php'); ?>
<div class="container">
        <div class="login">
            <form action="loginCheck.php" method="post">
                <label for="username"><b>Username</b></label>
                <input class="form-control" type="text" name="username" placeholder="Enter your name" required>
                 <label for="password"><b>Password</b></label>
                <input class="form-control" type="password" name="password" placeholder="Enter password" required>
                <input class="btn" type="submit" name="login" value="Login">
            </form>
       </div>
</div>

</body>
</html>