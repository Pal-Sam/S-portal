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
$sql="Select * from result where usn= '$usno'";
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
  <link rel="stylesheet" href="/student/result/style.css">

</head>

<body >
<div class="container-fluid" style="background-color:white;">
    <nav class="navbar navbar-expand-sm ">
    
      <a class="navbar-brand" href="https://nmamit.nitte.edu.in/"><img src="/student/images/logo.png" alt="" width="400" height="70px" class="d-inline-block align-text-top" ></a>
      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <!-- Navbar links -->
      <div class="collapse navbar-collapse justify-content-md-center" id="collapsibleNavbar" >
        <ul class="navbar-nav nav-tabs" >
        <li class="nav-item">
            <a class="nav-link "   href="/student/main/home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/student/fee/fee.php">Fee</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/student/result/result.php">Result</a>
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
    
    <section class="result" style="height:150%;margin:10% auto;">
      <div class="container" style="width:50%;">
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">COURSE NAME</th>
      <th scope="col">CIE</th>
    </tr>
  </thead>
  <tbody>
    <tr>

      <th scope="row">EMPLOYABILITY SKILL DEVELOPMENT - I</th>
      <?php
      echo '<td>'.$row['esd'].'</td>';
      ?>
      
    </tr>
    <tr>
      <th scope="row">PROGRAMMING IN JAVA</th>
      <?php
      echo '<td>'.$row['java'].'</td>';
      ?>
     
      
    </tr>
    <tr>
      <th scope="row">DATABASE MANAGEMENT SYSTEMS</th>
      <?php
      echo '<td>'.$row['dbms'].'</td>';
      ?>
      
      
    </tr>
    <tr>
      <th scope="row">OPERATING SYSTEMS</th>
      <?php
      echo '<td>'.$row['os'].'</td>';
      ?>
      
      
    </tr>
    <tr>
      <th scope="row">ENGINEERING MANAGEMENT</th>
      <?php
      echo '<td>'.$row['em'].'</td>';
      ?>
      
    </tr>
    <?php
    if ($row['ai'] == -1) {
      echo '
    <tr>
      <th scope="row">WEB PROGRAMMING -ELE</th>';
      echo '<td>'.$row['web'].'</td>';
    }
    else if ($row['web'] == -1){
      echo '
      <tr>
        <th scope="row">ARTIFICIAL INTELLIGENCE- ELE</th>';
        echo '<td>'.$row['ai'].'</td>';
    }
      ?>
      
    </tr>
  </tbody>
</table>
</div>
    </section>
   
   
<div class="container-md">

</div>

</body>

</html>
