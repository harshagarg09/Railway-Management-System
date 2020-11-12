  
<?php include_once('connection.php'); ?>

<html>
<head>
<title>Railway Management</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">

<style>
   .topnav {
    overflow: hidden;
    background-color: #332;
   }

  .topnav a {
     float: left;
     color: #f2f2f2;
     padding: 20px 30px;
   }
   .container{
      height: auto;
      width: 100%;
      padding: 100px;
      margin: auto;
    }
	.login{
		width: 40%;
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
    margin: 15px;
    width: 80%;
    padding: 15px;
 }
 form{
    display: flex;
    align-items: center;
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
<div class="topnav">
  <a ></a>
</div>
<div class="container">
        <div class="login">
            <form action="register-login.php" method="post">
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