<?php 
session_start();
if(!isset($_SESSION['loggedin'])||( $_SESSION['loggedin']!=true)){
  header("location: /student/login/adlog.php");
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

if (isset($_POST['sub']) && $_POST['sub'] == 'sub') {
  echo'<script>';
  echo 'alert(heloo)';
  echo '</script>';
  $usn = $_POST['usn'];
  $nam = $_POST['nam'];
  $dob = $_POST['dob'];
  $pho = $_POST['pho'];
  $add = $_POST['add'];
  $pas = $_POST['pas'];
  $sql1 = "insert into details values('$usn','$nam','$dob',$pho,'$add','$pas')";
  mysqli_query($conn,$sql1);
  $com = $_POST['com'];
  $cet = $_POST['cet'];
  $hos = $_POST['hos'];
  $due = $_POST['due'];
  $sql2 = "insert into fee values('$usn','$com','$cet','$hos','$due')";
  mysqli_query($conn,$sql2);
  $esd = $_POST['esd'];
  $jav = $_POST['jav'];
  $dbm = $_POST['dbm'];
  $os = $_POST['os'];
  $em = $_POST['em'];
  $web = $_POST['web'];
  $ai = $_POST['ai'];
  $sql3 = "insert into result values('$usn',$esd,$jav,$dbm,$os,$em,$web,$ai)";
  mysqli_query($conn,$sql3);
$sql4="insert into document values('$usn',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL)";
mysqli_query($conn,$sql4);

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>NMAMIT ADMIN </title>
    <link rel="icon" href="/student/images/favicon.ico">
  <!-- bootstrap script -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <!-- css stylesheets -->
  <link rel="stylesheet" href="adstyle.css">
  <!-- fontawesome -->
<script src="https://kit.fontawesome.com/21f19ee64f.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<!-- google font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container-fluid" >
        <nav class="navbar navbar-expand-sm " >
        
          <a class="navbar-brand" href="https://nmamit.nitte.edu.in/"><img src="/student/images/logo.png" alt="" width="400" height="70px" class="d-inline-block align-text-top"></a>
          <!-- Toggler/collapsibe Button -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <!-- Navbar links -->
          <div class="collapse navbar-collapse justify-content-md-center" id="collapsibleNavbar">
            <ul class="navbar-nav nav-tabs" style="position:relative;left:20%;">
              <li class="nav-item ">
                <a class="nav-link" href="/student/logout.php">Logout</a>
              </li>
            </ul>
          </div>
        
        </nav>
        </div>
<div class="container" style="text-align: center;">
          <form action="adm.php" method="post" >
       <div class="container con1" >
      
            <h2>STUDENT DETAILS</h2>
            <div class="mb-3">
              <label for="nam" class="form-label"> Name :</label>
               <input type="text" name="nam" id="nam" />
              </div>
              <div class="mb-3">
                <label for="usn" class="form-label">Usn :</label>
                 <input type="text" name="usn" id="usn" />
              </div>
              <div class="mb-3">
                <label for="dob" class="form-label">Dob :</label>
                <input type="text" name="dob" placeholder="YYYY-MM-DD" id="dob"/>
              </div>
              <div class="mb-3">
                <label for="ph" class="form-label">Phone :</label>
                 <input type="number" name="pho"  id="pho"/>
              </div>
              <div class="mb-3">
                <label for="add" class="form-label">Address :</label>
                 <input type="text" name="add" id="add"/>
              </div> 
              <div class="mb-3">
                <label for="pas" class="form-label">Password :</label>
                 <input type="text" name="pas" id="pas"/>
              </div>    
        </div>
        
      <div class="container con2">
            <h2>FEES DETAILS</h2>
            <div class="mb-3">
              <label for="com" class="form-label">Comedk :</label>
              <input type="text" name="com" placeholder="ENTER (y/n)" id="com" />
              </div>
              <div class="mb-3">
                <label for="com" class="form-label">Cet :</label>
              <input type="text" name="cet" placeholder="ENTER (y/n)" id="com"/>
              </div>
              <div class="mb-3">
                <label for="hos" class="form-label">Hostel :</label>
              <input type="text" name="hos" placeholder="ENTER (y/n)" id="hos"/>
              </div>
              <div class="mb-3">
                <label for="due" class="form-label">Due Date :</label>
            <input type="text" name="due" placeholder="YYYY-MM-DD" id="due"/>
              </div>
        
      </div>
    
        <div class="container con3">
            
                <h2>CURRENT SEMESTER MARKS</h2>
                <div class="mb-3">
                  <label for="esd" class="form-label">Esd :</label>
                    <input type="number" name="esd" id="esd"/>
                  </div>
                  <div class="mb-3">
                    <label for="jav" class="form-label">Java :</label>
                    <input type="number" name="jav" id="jav"/>
                  </div>
                  <div class="mb-3">
                    <label for="dbm" class="form-label">Dbms :</label>
                    <input type="number" name="dbm" id="dbm"/>
                  </div> 
                  <div class="mb-3">
                    <label for="os" class="form-label">Os :</label>
                    <input type="number" name="os" id="os"/>
                  </div>
                  <div class="mb-3">
                    <label for="em" class="form-label">Em :</label>
                    <input type="number" name="em" id="em"/>
                  </div>
                  <div class="mb-3">
                    <label for="web" class="form-label">Web :</label>
                    <input type="number" name=" web" placeholder="Not Applicable: Enter -1" id="web"/>
                  </div>
                  <div class="mb-3">
                    <label for="ai" class="form-label"> Ai:</label>
                    <input type="number" name="ai" placeholder="Not Applicable:Enter -1" id="ai"/>
                  </div>
                 
    
          </div> 
            
            <div class="d-grid gap-2">
              <button class="btn btn-primary" name="sub" type="submit" value="sub" id="subb">Submit</button>
              </div>
            </form> 
 </div>
 <div style="height:50px;">

 </div>
</body>
</html>