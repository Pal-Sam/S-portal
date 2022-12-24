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
$clgid = false;
$aadid = false;
$sa = false;
$sb = false;
$sc = false;
$sd = false;
$internid = false;
$coursea = false;
$usno=$_SESSION['username'];
// clgid
// echo "<script type='text/javascript'>";
//       echo "alert('".basename($_FILES['clg']['name'])."');";
// echo "</script>";
if (isset($_POST['submit']) && $_POST['submit'] == 'Submit') {
if (isset($_FILES["clg"])&& $_FILES["clg"]["error"] == 0) {
// get details of the uploaded file
$fileTmpPath = $_FILES['clg']['tmp_name'];
$fileName = $_FILES['clg']['name'];
$fileSize = $_FILES['clg']['size'];
$fileType = $_FILES['clg']['type'];
$fileNameCmps = explode(".", $fileName);
$fileExtension = strtolower(end($fileNameCmps));
$allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc','pdf');
if (in_array($fileExtension, $allowedfileExtensions)) {
// directory in which the uploaded file will be moved
$uploadFileDir = 'C:/xampp/htdocs/student/pdf/';
$dest_path = $uploadFileDir . $fileName;
 
if(move_uploaded_file($fileTmpPath, $dest_path))
{
    $sql="UPDATE document SET clgid='$fileName' WHERE usn='$usno' ";
    $result=mysqli_query($conn,$sql);
                $clgid = true;
}
else
{$aadid = false ;
  echo 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
}
}
  }


// aadharid
  if (isset($_FILES["aadhar"])&& $_FILES["aadhar"]["error"] == 0) {
    // get details of the uploaded file
    $fileTmpPath = $_FILES['aadhar']['tmp_name'];
    $fileName = $_FILES['aadhar']['name'];
    $fileSize = $_FILES['aadhar']['size'];
    $fileType = $_FILES['aadhar']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
    $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc','pdf');
    if (in_array($fileExtension, $allowedfileExtensions)) {
    // directory in which the uploaded file will be moved
    $uploadFileDir = 'C:/xampp/htdocs/student/pdf/';
    $dest_path = $uploadFileDir . $fileName;
     
    if(move_uploaded_file($fileTmpPath, $dest_path))
    {
        $sql="UPDATE document SET aadid='$fileName' WHERE usn='$usno' ";
        $result=mysqli_query($conn,$sql);
                    $aadid = true;
    }
    else
    {$aadid = false;
      echo 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
    }
    }
      }
    //   sem marks
      if (isset($_FILES["sem1"])&& $_FILES["sem1"]["error"] == 0) {
        // get details of the uploaded file
        $fileTmpPath = $_FILES['sem1']['tmp_name'];
        $fileName = $_FILES['sem1']['name'];
        $fileSize = $_FILES['sem1']['size'];
        $fileType = $_FILES['sem1']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));
        $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc','pdf');
        if (in_array($fileExtension, $allowedfileExtensions)) {
        // directory in which the uploaded file will be moved
        $uploadFileDir = 'C:/xampp/htdocs/student/pdf/';
        $dest_path = $uploadFileDir . $fileName;
         
        if(move_uploaded_file($fileTmpPath, $dest_path))
        {
            $sql="UPDATE document SET sema='$fileName' WHERE usn='$usno' ";
            $result=mysqli_query($conn,$sql);
                        $sa = true;

        }
        else
        {$sa = false;
          echo 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
        }
        }
          }
          if (isset($_FILES["sem2"])&& $_FILES["sem2"]["error"] == 0) {
            // get details of the uploaded file
            $fileTmpPath = $_FILES['sem2']['tmp_name'];
            $fileName = $_FILES['sem2']['name'];
            $fileSize = $_FILES['sem2']['size'];
            $fileType = $_FILES['sem2']['type'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));
            $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc','pdf');
            if (in_array($fileExtension, $allowedfileExtensions)) {
            // directory in which the uploaded file will be moved
            $uploadFileDir = 'C:/xampp/htdocs/student/pdf/';
            $dest_path = $uploadFileDir . $fileName;
             
            if(move_uploaded_file($fileTmpPath, $dest_path))
            {
                $sql="UPDATE document SET semb='$fileName' WHERE usn='$usno' ";
                $result=mysqli_query($conn,$sql);
                            $sb = true;
            }
            else
            {$sb= false;
              echo 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
            }
            }
              }

              if (isset($_FILES["sem3"])&& $_FILES["sem3"]["error"] == 0) {
                // get details of the uploaded file
                $fileTmpPath = $_FILES['sem3']['tmp_name'];
                $fileName = $_FILES['sem3']['name'];
                $fileSize = $_FILES['sem3']['size'];
                $fileType = $_FILES['sem3']['type'];
                $fileNameCmps = explode(".", $fileName);
                $fileExtension = strtolower(end($fileNameCmps));
                $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc','pdf');
                if (in_array($fileExtension, $allowedfileExtensions)) {
                // directory in which the uploaded file will be moved
                $uploadFileDir = 'C:/xampp/htdocs/student/pdf/';
                $dest_path = $uploadFileDir . $fileName;
                 
                if(move_uploaded_file($fileTmpPath, $dest_path))
                {
                    $sql="UPDATE document SET semc='$fileName' WHERE usn='$usno' ";
                    $result=mysqli_query($conn,$sql);
                                $sc = true;
                }
                else
                {$sc = false;
                  echo 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
                }
                }
                  }
                  if (isset($_FILES["sem4"])&& $_FILES["sem4"]["error"] == 0) {
                    // get details of the uploaded file
                    $fileTmpPath = $_FILES['sem4']['tmp_name'];
                    $fileName = $_FILES['sem4']['name'];
                    $fileSize = $_FILES['sem4']['size'];
                    $fileType = $_FILES['sem4']['type'];
                    $fileNameCmps = explode(".", $fileName);
                    $fileExtension = strtolower(end($fileNameCmps));
                    $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc','pdf');
                    if (in_array($fileExtension, $allowedfileExtensions)) {
                    // directory in which the uploaded file will be moved
                    $uploadFileDir = 'C:/xampp/htdocs/student/pdf/';
                    $dest_path = $uploadFileDir . $fileName;
                     
                    if(move_uploaded_file($fileTmpPath, $dest_path))
                    {
                        $sql="UPDATE document SET semd='$fileName' WHERE usn='$usno' ";
                        $result=mysqli_query($conn,$sql);
                                    $sd = true;
                    }
                    else
                    {$sd = false;
                      echo 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
                    }
                    }
                      }
                      if (isset($_FILES["i1"])&& $_FILES["sem1"]["error"] == 0) {
                        // get details of the uploaded file
                        $fileTmpPath = $_FILES['i1']['tmp_name'];
                        $fileName = $_FILES['i1']['name'];
                        $fileSize = $_FILES['i1']['size'];
                        $fileType = $_FILES['i1']['type'];
                        $fileNameCmps = explode(".", $fileName);
                        $fileExtension = strtolower(end($fileNameCmps));
                        $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc','pdf');
                        if (in_array($fileExtension, $allowedfileExtensions)) {
                        // directory in which the uploaded file will be moved
                        $uploadFileDir = 'C:/xampp/htdocs/student/pdf/';
                        $dest_path = $uploadFileDir . $fileName;
                         
                        if(move_uploaded_file($fileTmpPath, $dest_path))
                        {
                            $sql="UPDATE document SET intern='$fileName' WHERE usn='$usno' ";
                            $result=mysqli_query($conn,$sql);
                                        $internid = true;
                        }
                        else
                        {$internid= false;
                          echo 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
                        }
                        }
                          }
                          if (isset($_FILES["c1"])&& $_FILES["c1"]["error"] == 0) {
                            // get details of the uploaded file
                            $fileTmpPath = $_FILES['c1']['tmp_name'];
                            $fileName = $_FILES['c1']['name'];
                            $fileSize = $_FILES['c1']['size'];
                            $fileType = $_FILES['c1']['type'];
                            $fileNameCmps = explode(".", $fileName);
                            $fileExtension = strtolower(end($fileNameCmps));
                            $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc','pdf');
                            if (in_array($fileExtension, $allowedfileExtensions)) {
                            // directory in which the uploaded file will be moved
                            $uploadFileDir = 'C:/xampp/htdocs/student/pdf/';
                            $dest_path = $uploadFileDir . $fileName;
                             
                            if(move_uploaded_file($fileTmpPath, $dest_path))
                            {
                                $sql="UPDATE document SET coursea='$fileName' WHERE usn='$usno' ";
                                $result=mysqli_query($conn,$sql);
                                            $coursea = true;
                            }
                            else
                            {$coursea = false;
                              echo 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
                            }
                            }
                              }
}



?>