<?php include_once('connection.php'); ?>
<?php include_once('register-php.php')?>
<?php include_once('login-php.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">

    <style>
        .container{
            height: auto;
            width: 100%;
            display: flex;
             padding: 34px;
    margin: auto;
        }
        .registration{
            width: 50%;
        }
        .login{
            width: 50%;
        }
        *{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}

input{
    
    border: 1px solid black;
    outline: none;
    border-radius: 31px;
    font-size: 13px;
    margin: 9px;
    width: 80%;
    padding: 9px;
}
form{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    
}
.btn{
    width: 50%;
    color: white;
    background: darkred;
    padding: 13px 30px;
    font-size: 15px;
    border: 2px solid white;
    border-radius: 17px;
    cursor: pointer;
}
        .btn:hover {
  background-color: #ddd;
  color: black;
}
    </style>
</head>
<body>
<?php include('header.php'); ?>

   <div class="container">
        <div class="registration">
           <div>
            <form action="register-login.php" method="post">
                <h2>Registration</h2>
                <p>For new users only</p>
                <br>
                <label for="username"><b>Username</b></label>
                <input class="form-control" type="text" name="username" placeholder="Enter your name" required>
                <label for="email"><b>Email id</b></label>
                <input class="form-control" type="email" name="email" placeholder="Enter email id" required>
                <label for="address"><b>Address</b></label>
                <input class="form-control" type="text" name="address" placeholder="Enter your address">
                <label for="phone"><b>Phone</b></label>
                <input class="form-control" type="phone" name="phone" placeholder="Enter your phone">
                <label for="credit"><b>Credit Card No.</b></label>
                <input class="form-control" type="text" name="credit" placeholder="Enter credit card number" required>
                <label for="name"><b>Password</b></label>
                <input class="form-control" type="password" name="password" placeholder="Enter password" required>
                <input class="btn" type="submit" name="signup" value="Signup">
            
            </form>
            </div>
       </div>
        <div class="login">
            <form action="register-login.php" method="post">
                <h2>Login</h2>
                <p>For Existing users only</p>
                <br>
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