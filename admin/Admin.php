 <?php include_once('connection.php'); ?>
 <?php include_once('header.php'); ?>
<?php
	//include('connection.php');
    if(isset($_POST['login'])){
       
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        
        $check_user = " SELECT * FROM admin WHERE db_username = '$username' AND db_password = '$password' ";
                
        $result = mysqli_query($conn, $check_user);
        
        if(mysqli_num_rows($result)>0)
		{
            header('location:dashboard.php');
        }
        else{
			?>
			<?php
			$_SESSION['status'] ="Wrong UserName/Password";
			$_SESSION['text'] = "Try Again";
			$_SESSION['status_code'] = "Warning";
			echo "Error";
            //header('location:admin.php');
        }
           
    }
?>
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
<?php include('scripts.php');?>
