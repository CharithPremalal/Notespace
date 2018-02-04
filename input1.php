<?php
 session_start();
$msg="";
if(isset($_POST['up'])){
  $target="./".basename($_FILES['image2']['name']);
  $db=mysqli_connect("localhost","root","","corridor1");
  $image=$_FILES['image2']['name'];
  $text=$_POST['text2'];
  $studno=$_SESSION['lstuno'];
  $title=$_POST['heading'];
  $time=date("H:m:s");
  $pid="$studno+$time";
  $sql="INSERT INTO post(p_id,p_body,stu_no,p_pic,heading) VALUES('$pid','$text','$studno','$image','$title')";
  if(mysqli_query($db,$sql)){echo"done";}else{echo"error:".mysqli_error($db);}
  if(move_uploaded_file($_FILES['image2']['tmp_name'],$target)){
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

 