
<?php
	include('connection.php');
	
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
			<h1 align='center'> Wrong UserName/Password</h1>
			<?php
            die();
        }
           
    }
?>
