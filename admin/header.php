<html>
<head>
<style>

.container{
      height: auto;
      padding: 100px;
      margin: auto;
    }
	.login{
    margin: auto;
    padding: 10px;
    box-sizing: border-box;
	width: 50%;
 }
 input{
    border: 1px solid black;
    outline: none;
    border-radius: 31px;
    font-size: 19px;
    margin: 15px;
    width: 50%;
    padding: 15px;
 }
 form{
    display: flex;
    align-items: center;
    flex-direction: column;   
 }
 .btn{
    width: 30%;
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
.topnav {
  overflow: hidden;
  background-color: #332;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 20px 30px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
h1 {
  border-top: 50px solid black;
}
</style>
</head>

<body>
<div class="topnav">
  <a href="logout.php"  style="float:right">Logout</a>
  <a href="#" style="float:center">Railway Reservation</a>
</div>
