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
                $a = $_SESSION['status'];
            $b = $_SESSION['text'];
            $c = $_SESSION['status_code'];
        echo "<script>
            Swal.fire(
               '$a',
               '$b',
               '$c'
            )
        </script>";
        unset($_SESSION['status']);
               // echo "Login Successful!!";
                header('location:user/userDashboard.php');
            }
            else{
                $_SESSION['status'] = "Wrong password!";
                $_SESSION['text'] =  "Try again...";
                $_SESSION['status_code'] = 'warning';
                echo "Error";
            }
           
        }
        else{
            $_SESSION['status'] = " Not an Existing user!";
            $_SESSION['text'] =  "Signup!!";
            $_SESSION['status_code'] = 'error';
             echo "ERROR !!! Not an Existing user || Signup!!";
        }
      
        $conn->close();
    }
?>