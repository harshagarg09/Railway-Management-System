<?php
    if(isset($_POST['findtrains'])){
       // echo "registration successful!!!";
        $source = $_POST['source'];
        $dest = $_POST['dest'];
        $trainid = $_POST['trainid'];
        $depart = $_POST['depart'];
        $arrival = $_POST['arrival'];
        $numpassenger = $_POST['numpassenger'];
        $coaches = isset($_POST['coaches']) ? $_POST['coaches'] : false;
  
        
        if($trainid && $depart && $numpassenger && $coaches){
            //check in booking system whether train is released on that date or not
            $check_train = " SELECT * FROM booking_system WHERE db_trainNo = '$trainid' AND db_date = '$depart' ";
                
            $result = mysqli_query($conn, $check_train);

            if(mysqli_num_rows($result)>0){
                //train exists in booking system
                //now check if tickets can be booked or not
                
                $check_available_seats = " SELECT * FROM `".$trainid."` WHERE db_date = '$depart' AND db_coachType = '$coaches' AND db_bookStatus = 0 ";
                echo $check_available_seats;
                $num_of_available_seats = mysqli_query($conn,$check_available_seats);
                if(mysqli_num_rows($num_of_available_seats)>=$numpassenger){
                    $_SESSION['trainid'] = $trainid;
                    $_SESSION['depart'] = $depart;
                    $_SESSION['numpassenger'] = $numpassenger;
                    $_SESSION['coaches'] = $coaches;

                    echo "Successful!!";
                    header('location:bookticket.php');
                }
                else{
                //    echo $num_of_available_seats;
                    echo "<br>";
                       $_SESSION['status'] = "Sorry!";
                        $_SESSION['text'] =  "Tickets not available";
                        $_SESSION['status_code'] = 'error';
                    echo "Sorryyy!!! Tickets not available !!";
                }

            }
            else{
                $_SESSION['status'] = "Sorry!You can't book this train!";
                $_SESSION['text'] =  "Train not released by admin";
                $_SESSION['status_code'] = 'warning';
                 echo "ERROR !!! The train is not released by admin yet!!";
            }


             //   echo "yayyyyy";
            }
            else
                echo "nooooooo";

        
        
        
    }
?>