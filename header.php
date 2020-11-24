
<style>
body {
  margin: 10;
  font-family: Arial, Helvetica, sans-serif;
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
  .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
  height: 300px;
}
  #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #800000;
  color: white;
}
  
  footer {
   position:absolute;
   bottom:0;
   width:100%;
     /* Height of the footer */
   background-color: black;
   color: white;
}
</style>

<div class="topnav">
  <a href="index.php">Home</a>
  <a href="About.php">About</a>
  <a href="contact.php">Contact</a>
  <a href="register-login.php"  style="float:right">Login</a>
</div>
