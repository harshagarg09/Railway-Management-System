<?php 
    session_start(); 
    if(!isset($_SESSION['username'])){
        header('location:register-login.php');
    }

?>
<?php include('user-header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Home Page</title>
</head>
<body>
    <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
</body>
</html> 