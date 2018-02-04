<?php
$msg="";
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$eml=$_POST['email'];
$pno=$_POST['number'];
$comn=$_POST['company'];
$adloc=$_POST['location'];


if(isset($_POST['submit'])){
  $target="./".basename($_FILES['advt']['name']);
  $db=mysqli_connect("localhost","root","","corridor1");
  $image=$_FILES['advt']['name'];
  $discription=$_POST['textarea'];
  $sql="INSERT INTO ads(firstName,lastName,email,phno,companyName,image,adLocation,adDescription) VALUES('$fn','$ln','$eml','$pno','$comn','$image','$adloc','$discription')";
  if(mysqli_query($db,$sql)){echo"done";}else{echo"error:".mysqli_error($db);}
  if(move_uploaded_file($_FILES['advt']['tmp_name'],$target)){
    $msg="image uload successfull";
  }else{
      $msg="image uload unsuccessfull";
  }
}


 ?>
<html>
 <head>
<meta http-equiv="refresh" content="0; url=http://localhost/Final/home.php">
</head>
</html>
