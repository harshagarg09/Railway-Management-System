
   <?php include_once('../connection.php'); ?>

   <?php 
    if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
    //session_start(); 
    if(!isset($_SESSION['username'])){
        header('location: ../register-login.php');
    }

?>
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
              //  echo $check_available_seats;
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
                    //echo "<br>";
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
                 echo "<h1>ERROR !!! The train is not released by admin yet!!</h1>";
            }


               // echo "yayyyyy";
            }
            else
                echo "nooooooo";

        
        
        
    }
?>
<?php include("scripts.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Home Page</title>
         <link rel="stylesheet" type="text/css" href="css/dashboard.css">
<script>
     document.getElementById("#myDate").min = new Date().getFullYear() + "-" +  parseInt(new Date().getMonth() + 1 ) + "-" + new Date().getDate()

    </script>
</head>
<body>
   <?php include('user-header.php'); ?>

    <h1 style="color:white">Welcome <?php echo $_SESSION['username']; ?></h1>
    
    
<div class="bookticketform"> <h1>BOOK MY TICKET</h1> </div>
<div class="main"> 
    <form action="userDashboard.php" method="post" onsubmit="return confirm('Are you sure you want to submit?')"> 
    <div id="label1">
        <h2 class="labels">Journey</h2>
        <input class="source" type="text" name="source"><br>
        <label class="sourcelabel">From</label>
        <input class="dest" type="text" name="dest">
        <label class="destlabel">To</label>
    </div>
        <h2 class="labels">Train ID</h2> 
        <input class="trainid" type="text" name="trainid" required>
    <div id="label2">
        <h2 class="labels">Date of Journey</h2>
        <input class="depart" type="date" name="depart" id="myDate" min="<?php /*$today=date('Y-m-d'); */echo date('Y-m-d'/*,strtotime("$today +1 day")*/); ?>" required><br>
        <label class="departlabel">Departure</label>
        <input class="arrival" type="date" name="arrival" min="<?php $today=date('Y-m-d'); echo date('Y-m-d',strtotime("$today +1 day")); ?>">
        <label class="arrivallabel">Arrival</label>
    </div>
        <h2 class="labels">Number of Passengers</h2> 
        <input class="trainid" type="number" name="numpassenger" required>
    <div id="label2">
        <h2 class="labels">Class</h2>
        <select class="option" name="coaches" required>
          <option disabled="disabled" selected="selected" name="coach" value="NA">--Choose Option</option>
          <option value="AC"> AC </option>
          <option value="Sleeper"> Sleeper </option>
        </select>
        <input class="button" type="submit" name="findtrains" value="Find Trains">
        </div>
        
    </form>

</div>  



</body>
</html> 
