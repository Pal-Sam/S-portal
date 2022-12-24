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
$sql="Select * from details where usn= '$usno'";
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
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu&display=swap" rel="stylesheet">
  
</head>

<body>
<div class="container-fluid">
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
            <a class="nav-link active" aria-current="page"  href="/student/main/home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/student/fee/fee.php">Fee</a>
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
  <!-- carousel -->
  <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img height="600px" src="/student/images/1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img height="600px" src="/student/images/3.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img height="600px" src="/student/images\2.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- space  -->
  <div class="gap-div"></div>
  <!-- personal info -->
  <section id="personal">
    <div class="card text-center">
      <div class="card-header" style="border:0;">
        <h1 class="person-head">Welcome <?php echo  $_SESSION['username'] ;?></h1>
      </div>
      <div class="card-body ">
        <table class="table">
          <tbody >
            <tr>
              <td class="key">Name: </td>
              <td class="value"><?php echo  $row["name"] ;?></td>
            </tr>
            <tr>
              <td class="key">Usn: </td>
              <td class="value"><?php echo  $row["usn"] ;?></td>
            </tr>
            <tr>
              <td class="key" >DOB: </td>
              <td class="value"><?php echo  $row["dob"] ;?></td>
            </tr>
            <tr>
              <td class="key" >Mobile: </td>
              <td class="value"><?php echo  $row["phone"] ;?></td>
            </tr>
            <tr>
              <td class="key" >Address: </td>
              <td class="value"><?php echo  $row["address"] ;?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>
  <!-- footer -->
  
  <section id="footer">
    <p><strong>______ Contact Us ______</strong></STRONG></p>
    <P >NMAM Institute of Technology
Nitte, Karkala Taluk,
Udupi - 574110
Karnataka, India
</P>
    <p>@Nitte, Mangalore</p>

  </section>

</body>

</html>
