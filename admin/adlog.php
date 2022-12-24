<?php
$login=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
$server= "localhost";
$username= "root";
$password="";
$database="student";

$conn= mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("Error :". mysqli_connect_error());
}
$usid=$_POST["userid"];
$pass=$_POST["password"];


$sql="Select * from admin where adid='$usid' AND passwd='$pass'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num==1){
  $login=true;
  session_start();
  $_SESSION['loggedin']=true;
  $_SESSION['username']=$usid;
  header("location:/student/admin/adm.php");
}
else{
$showError="Invalid Credentials";
}

}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
    <title>NMAMIT STUDENT </title>
    <link rel="icon" href="/student/images/favicon.ico">
  <!-- bootstrap script -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <!-- css stylesheets -->
  <link rel="stylesheet" href="style.css">
  <!-- fontawesome -->
<script src="https://kit.fontawesome.com/21f19ee64f.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<!-- google font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu&display=swap" rel="stylesheet">
<!-- javascript  -->
<script src="/student/validate.js"></script>
</head>

<body>
  <!--navigation-->
 
    <nav class="navbar navbar-expand-sm  shadow-lg  p-3  bg-body rounded">
<div class="container-fluid nav-container">
   <a class="navbar-brand" href="https://nmamit.nitte.edu.in/"><img src="/student/images/logo.png" alt="college-logo"  class="d-inline-block align-text-top " id="img-nav"></a>
  </div>
   </nav>

  <!--login content-->
<div class="container-">

  <div class="row">
    <div class="col-6 first-div">

<div class="form-div">

  <form class="login" name="myform" action="/student/admin/adlog.php"  method="post" onsubmit=" return validateLoginForm()"  >
    <h2 class="form-h2">LOGIN</h2>
    <div class="form-elements">
    <div class="dropdown ">
  <button class="btn btn-sm btn-outline-dark dropdown-toggle user-ch " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    USER
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="/student/login/login.php">STUDENT</a></li>
    <li><a class="dropdown-item" href="/student/admin/adlog.php">ADMIN</a></li>
  </ul>
</div>

<div class="form-usn form-control-lg">

<input type="text" name="userid" id="userid" placeholder="User Id" ><br>
</div>

<div class="form-password form-control-lg">

<input type="password" name="password" id="password" placeholder="Password"><br>
</div>
<br><?php
if($showError=="Invalid Credentials" && $login==false){
echo '<div id="errorMsg" style="color:red;width:100%;position:absolute;bottom:20%;left:5%"></div>';
}
?>
<div class="d-grid gap-2 col-6 mx-auto">
  <button type="submit" name="button" class="btn  btn-lg log-bt" >LOGIN</button>
</div>

</div>
</form>
</div>
      </div>


    <div class="col-6 second-div">
<img class="clg-img" src="https://images.shiksha.com/mediadata/images/1520493678phpGdcLuV.jpeg" alt="college-image">

    </div>

  </div>

</div>

</body>

</html>
