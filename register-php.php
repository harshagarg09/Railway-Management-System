<?php
    if(isset($_POST['signup'])){
       // echo "registration successful!!!";
        $username = $_POST['username'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $credit = $_POST['credit'];
        $password = $_POST['password'];
        
        
        $q_email = "SELECT * FROM users where email = '$email' ";
                
        $check_duplicate_email = mysqli_query($conn, $q_email);
        
        if(mysqli_num_rows($check_duplicate_email)>0){
            $_SESSION['status'] = "Email id already exists!";
            $_SESSION['text'] =  "Existing users Login!!";
            $_SESSION['status_code'] = 'warning';
            echo "ERROR !!";
        }
        else{
              $sql = "INSERT INTO `users`(`username`,`email`,`address`,`phone`,`CC`,`password`) VALUES('$username','$email','$address','$phone','$credit','$password')";
        
                if($conn->query($sql) == TRUE){
                    $_SESSION['status'] = "Registration successful!";
                    $_SESSION['text'] =  "";
                    $_SESSION['status_code'] = 'success';
                    echo "Saved successfull";
                }
                else{
                   // echo "ERRRorr : $sql <br> $conn->error";
                    $_SESSION['status'] = "Username already exists!";
                    $_SESSION['text'] =  "Please register with different username";
                    $_SESSION['status_code'] = 'error';
                    echo "ERROR !!!";
                }
            }
      
        $conn->close();
     /*   if($check == true){
            echo "Data saved successfully!!!";
        }
        else{
            echo "check again!!!!";
        }*/
        
       // echo $name ." ".$email;
        
    }
?>