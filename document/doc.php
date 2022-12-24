<?php 
include 'upload.php';
$usno = $_SESSION['username'];
$sql=" select * from document where usn ='$usno'";
 $result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
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
            <a class="nav-link "  href="/student/main/home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/student/fee/fee.php">Fee</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/student/result/result.php">Result</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page"  href="/student/document/doc.php">Document</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/student/logout.php">Logout</a>
          </li>
        </ul>
      </div>
    
    </nav>
    </div>
    <section id="docs">
      <div class="uid">
      <h2>Upload Ids</h2>
      <form action="/student/document/doc.php" method="post" enctype="multipart/form-data">
      <div class="row">
  <div class="col-sm-6">
    <div class="card">
    
      <div class="card-body">
        <h5 class="card-title">College Id</h5>
        
        <div class="input-group mb-3">
  <input type="file" class="form-control" name="clg" id="inputGroupFile02">

</div>
<?php
if(($clgid==true )&&(isset($_FILES['clg'])))
{
  echo '<div class="alert alert-success text-center">Uploaded Successfully</div>';
}

?>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
  
      <div class="card-body">
        <h5 class="card-title">Aadhar Card</h5>
        
        <div class="input-group mb-3">
  <input type="file" class="form-control" name="aadhar" id="inputGroupFile02">

</div>
<?php
if($aadid==true&&(isset($_FILES['aadhar'])))
{
  echo '<div class="alert alert-success text-center">Uploaded Successfully</div>';
}

?>
      </div>
    </div>
  </div>
</div>
</div>
<hr>
<div class="umarks">
      <h2>Upload Markscard</h2>
      <div class="row">
  <div class="col-sm-6">
    <div class="card">
    
      <div class="card-body">
        <h5 class="card-title">Semester 1</h5>
        
        <div class="input-group mb-3">
  <input type="file" class="form-control" name="sem1" id="inputGroupFile02">
  
</div>
<?php
if($sa==true&&(isset($_FILES['sem1'])))
{
  echo '<div class="alert alert-success text-center">Uploaded Successfully</div>';
}

?>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
    
      <div class="card-body">
        <h5 class="card-title">Semester 2</h5>
        
        <div class="input-group mb-3">
  <input type="file" class="form-control" name="sem2" id="inputGroupFile02">
  
</div>
<?php
if($sb==true&&(isset($_FILES['sem2'])))
{
  echo '<div class="alert alert-success text-center">Uploaded Successfully</div>';
}

?>
      </div>
    </div>
  </div>
  </div>
  <div class="row">
  <div class="col-sm-6">
    <div class="card">
    
      <div class="card-body">
        <h5 class="card-title">Semester 3</h5>
        
        <div class="input-group mb-3">
  <input type="file" class="form-control" name="sem3" id="inputGroupFile02">
  
</div>
<?php
if($sc==true&&(isset($_FILES['sem3'])))
{
  echo '<div class="alert alert-success text-center">Uploaded Successfully</div>';
}

?>

      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
    
      <div class="card-body">
        <h5 class="card-title">Semester 4</h5>
        
        <div class="input-group mb-3">
  <input type="file" class="form-control" name="sem4" id="inputGroupFile02">
 
</div>
<?php
if($sd==true&&(isset($_FILES['sem4'])))
{
  echo '<div class="alert alert-success text-center">Uploaded Successfully</div>';
}

?>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<hr>
<div class="uinter">
<h2>Upload Internship Certificate</h2>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
    
      <div class="card-body">
        <h5 class="card-title">Internship</h5>
        
        <div class="input-group mb-3">
  <input type="file" class="form-control" name="i1" id="inputGroupFile02">
 
</div>
<?php
if($internid==true&&(isset($_FILES['i1'])))
{
  echo '<div class="alert alert-success text-center">Uploaded Successfully</div>';
}

?>
      </div>
    </div>
  </div>
  
</div>
</div>
<hr>
<div class="ucourse">
<h2>Upload Course Certificates</h2>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
    
      <div class="card-body">
        <h5 class="card-title">Course </h5>
        
        <div class="input-group mb-3">
  <input type="file" class="form-control" name="c1" id="inputGroupFile02">

</div>
<?php
if($coursea==true&&(isset($_FILES['c1'])))
{
  echo '<div class="alert alert-success text-center">Uploaded Successfully</div>';
}

?>
      </div>
    </div>
  </div>
 
  </div>
</div>
</div>
<br><br>
<input type="submit" name="submit" value="Submit" id="submit"/>
<hr>
</form>
    </section>


    <section id="display">
      

    </section>
<div class="container-md">
  <h2>Uploaded Documents</h2>
<br>
<div class="row">
        <div class="col-xs-8 col-xs-offset-2 tab">
            <table class="table table-striped table-hover">
                <thead>
                    <tr style="font-size:1.5rem;">
                        
                        <th>File </th>
                        <th class="view">View</th>
                        <th class="download">Download</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                 $sql="SELECT * FROM document where usn='$usno' ";
                 $res=mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($res); 
                  echo '<tr><td style="font-weight:bold;">College ID</td>
                      <td><a href="/student/pdf/'.$row["clgid"].'" target="_blank">View</a></td>
                      <td><a href="/student/pdf/'.$row["clgid"].'" download>Download</a></td>
                      </tr>';
                  echo '<tr><td style="font-weight:bold;">Aadhar ID</td>
                      <td><a href="/student/pdf/'.$row["aadid"].'" target="_blank">View</a></td>
                      <td><a href="/student/pdf/'.$row["aadid"].'" download>Download</a></td>
                      </tr>'; 
                  echo '<tr><td style="font-weight:bold;">Semester 1 Markscard</td>
                      <td><a href="/student/pdf/'.$row["sema"].'" target="_blank">View</a></td>
                      <td><a href="/student/pdf/'.$row["sema"].'" download>Download</a></td>
                      </tr>'; 
                  echo '<tr><td style="font-weight:bold;">Semester 2 Markscard</td>
                      <td><a href="/student/pdf/'.$row["semb"].'" target="_blank">View</a></td>
                      <td><a href="/student/pdf/'.$row["semb"].'" download>Download</a></td>
                      </tr>'; 
                  echo '<tr><td style="font-weight:bold;">Semester 3 Markscard</td>
                      <td><a href="/student/pdf/'.$row["semc"].'" target="_blank">View</a></td>
                      <td><a href="/student/pdf/'.$row["semc"].'" download>Download</a></td>
                      </tr>'; 

                  echo '<tr><td style="font-weight:bold;">Semester 4 Markscard</td>
                      <td><a href="/student/pdf/'.$row["semd"].'" target="_blank">View</a></td>
                      <td><a href="/student/pdf/'.$row["semd"].'" download>Download</a></td>
                      </tr>'; 
                  echo '<tr><td style="font-weight:bold;">Internship Certificate:</td>
                      <td><a href="/student/pdf/'.$row["intern"].'" target="_blank">View</a></td>
                      <td><a href="/student/pdf/'.$row["intern"].'" download>Download</a></td>
                      </tr>'; 

                  echo '<tr><td style="font-weight:bold;">Course Certificate</td>
                      <td><a href="/student/pdf/'.$row["coursea"].'" target="_blank">View</a></td>
                      <td><a href="/student/pdf/'.$row["coursea"].'" download>Download</a></td>
                      </tr>'; 



                 ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


</body>

</html>
