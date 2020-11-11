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
            echo "ERROR !!! Email id already exists!! Existing users Login!!";
        }
        else{
              $sql = "INSERT INTO `users`(`username`,`email`,`address`,`phone`,`CC`,`password`) VALUES('$username','$email','$address','$phone','$credit','$password')";
               // $check = mysqli_query($conn,$sql);
        
                if($conn->query($sql) == TRUE){
                    echo "Saved successfull";
                }
                else{
                   // echo "ERRRorr : $sql <br> $conn->error";
                    echo "ERROR !!! Username already exists!!";
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