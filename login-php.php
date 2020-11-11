<?php
    if(isset($_POST['login'])){
       // echo "registration successful!!!";
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        
        $check_user = " SELECT * FROM users WHERE username = '$username' ";
                
        $result = mysqli_query($conn, $check_user);
        
        if(mysqli_num_rows($result)>0){
            $check_password = " SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
            $result_pass = mysqli_query($conn, $check_password);
            if(mysqli_num_rows($result_pass)>0){
                $_SESSION['username'] = $username;
                echo "Login Successful!!";
                header('location:userDashboard.php');
            }
            else{
                echo "Wrong password !! Try again !!";
            }
           
        }
        else{
             echo "ERROR !!! Not an Existing user || Signup!!";

        }
      
        $conn->close();
    }
?>