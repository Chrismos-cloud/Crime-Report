<!DOCTYPE html>
<html>
<head>
<?php

if (isset($_POST['s'])) {
  session_start();
  $_SESSION['u_id'] = 1;
  $conn = mysqli_connect("localhost", "root", "", "crime_portal");
  if (!$conn) {
    die("could not connect" . mysqli_error($con));
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['email'];
    $pass = $_POST['password'];
    $u_id = $_POST['email'];
    $_SESSION['u_id'] = $u_id;

    if (!empty($u_name) && !empty($u_pass)) {
      $query = "select * from users where u_name = '$u_name' limit 1";
      $result = mysqli_query($con, $query);

      if ($result) {
        if ($result && mysqli_num_rows($result) > 0) {
          $_SESSION['u_id'] = $user_data['u_id'];
          header("location: complainer_page.php");
        }
      }

    } else {
      echo "Please enter some valid information";
    }
  }
}
?> 
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    

    
  <title>Complainant Login</title>
</head>
<body style="background-size: cover;
    background-image: url(regi_bg.jpg);
    background-position: center;">
  <nav class="navbar navbar-default navbar-fixed-top" style="height: 60px;">
  <div class="container">
    <div class="navbar-header">
     
      <a class="navbar-brand" href="home.php" style="margin-top: 5%;"><b>Trinity University Crime Portal</b></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active" style="margin-top: 5%;"><a href="userlogin.php">Complainer Login</a></li>
      </ul>
    
      
    </div>
  </div>
 </nav>
 <div  align="center" >
  <div class="form" style="margin-top: 15%">
    <form method="post">
  <div class="form-group" style="width: 30%">
    <label for="exampleInputEmail1"><h1 style="color: #fff;">User Id</h1></label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" size="5" placeholder="Enter Email id" required name="email" onfocusout="f1()">
     </div>
  <div class="form-group" style="width:30%">
    <label for="exampleInputPassword1"><h1 style="color: #fff;">Password</h1></label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required name="password" onfocusout="f1()">
  </div>
  
  <button type="submit" class="btn btn-primary" name="s" onclick="f1()">Submit</button>
</form>
  </div>
</div>
<div style="position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: rgba(0,0,0,0.7);
   color: white;
   text-align: center;">
  <h4 style="color: white;">&copy <b>Trinity University Crime Portal, 2023</b></h4>
</div>

</body>
</html>