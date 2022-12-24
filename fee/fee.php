<?php 
session_start();
if(!isset($_SESSION['loggedin'])||( $_SESSION['loggedin']!=true)){
  header("location: /student/login/login.php");
  exit;

}
$server= "localhost";
$username= "root";
$password="";
$database="student";
$conn= mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("Error :". mysqli_connect_error());
}
$usno=$_SESSION['username'];
$sql="Select * from fee where usn= '$usno'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result)
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>STUDENT portal</title>
  <link rel="icon" href="/student/images/favicon.ico">
  <!-- bootstrap script -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <!-- css stylesheets -->
  <link rel="stylesheet" href="style.css">
</head>

<body >
<div class="container-fluid" >
    <nav class="navbar navbar-expand-sm ">
    
      <a class="navbar-brand" href="https://nmamit.nitte.edu.in/"><img src="/student/images/logo.png" alt="" width="400" height="70px" class="d-inline-block align-text-top"></a>
      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <!-- Navbar links -->
      <div class="collapse navbar-collapse justify-content-md-center" id="collapsibleNavbar">
        <ul class="navbar-nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link "  href="/student/main/home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/student/fee/fee.php">Fee</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/student/result/result.php">Result</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/student/document/doc.php">Document</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/student/logout.php">Logout</a>
          </li>
        </ul>
      </div>
    
    </nav>
    </div>
    <section class="fee-sec">
      
      <?php 
      if($row['cet']=='y'){
  echo '<div class="container  " style="height:300px;width:500px;text-align:center;margin:5% auto ;">
    <div class="card rounded"  style="height:100%;width:100%;text-align:center;margin:5% auto ;">
    <div class="card-header">
    CET
  </div>
      <div class="card-body">
        <p class="card-text">Tution Fee : RS.75,000 </p>
       
        <button class="btn btn-primary" style="background-color:#091353;"><a href="https://rzp.io/i/Ua0qLtxgYq" target="_blank" style="color:white">PAY </a></button>
      </div>
      <div class="card-footer ">';
      echo "DUE DATE : ".$row['due'];
      echo ' </div>
          </div>
    </div>';
     }
  if($row['comedk']=='y'){
   echo '<div class="container " style="height:300px;width:500px;text-align:center;margin:5% auto" ;>
    <div class="card  rounded"  style="height:100%;width:100%;text-align:center;margin:5% auto ;">
    <div class="card-header">
    COMEDK
    </div>
      <div class="card-body">
      <p class="card-text">Tution Fee : RS.2,30,000</p>
        <button class="btn btn-primary" style="background-color:#091353;"><a href="https://rzp.io/i/KGPebSo" target="_blank" style="color:white">PAY </a></button>
      </div>
      <div class="card-footer ">';
      echo "DUE DATE : ".$row['due'];
 echo' </div>
    </div>
    </div>';
  }
  if($row['hostel']=='y'){
   echo '<div class="container " style="height:300px;width:500px;text-align:center;margin:5% auto" ;>
    <div class="card  rounded"  style="height:100%;width:100%;text-align:center;margin:5% auto ;">
    <div class="card-header">
    Hostel
    </div>
      <div class="card-body">
        <p class="card-text">5th Semester : RS.45,000 </p>
        <p class="card-text">Mess Advance : RS.15,000 </p>
       
        <button class="btn btn-primary" style="background-color:#091353;"><a href="https://rzp.io/i/KGPebSo" target="_blank" style="color:white">PAY </a></button>
      </div>
      <div class="card-footer ">';
     echo "DUE DATE : ".$row['due'];
        echo '</div>
    </div>
    </div>';
  }
    ?>
    </section>
<div class="container-md">

</div>

</body>

</html>
