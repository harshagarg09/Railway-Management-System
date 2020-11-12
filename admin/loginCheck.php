<?php
    if(isset($_POST['login'])){
       
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        
        $check_user = " SELECT * FROM admin WHERE username = '$username' AND password = '$password' ";
                
        $result = mysqli_query($conn, $check_password);
        
        if(mysqli_num_rows($result)>0)
		{
            $_SESSION['username'] = $username;
            header('location:Dashboard.php');
        }
        else{
            header('location:../Admin.php');
        }
           
        }
    }
?>
