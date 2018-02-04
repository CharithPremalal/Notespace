<?php
$msg="";
if(isset($_POST['abt'])){
  $target="./".basename($_FILES['propic']['name']);
  $db=mysqli_connect("localhost","root","","corridor1");
  $image=$_FILES['propic']['name'];
  $text=$_POST['about'];
  $sql="UPDATE user SET pro_pic='$image',desp='$text' WHERE email='charith@gmail.com'";
  if(mysqli_query($db,$sql)){echo"done";}else{echo"error:".mysqli_error($db);}
  if(move_uploaded_file($_FILES['propic']['tmp_name'],$target)){
    $msg="image uload successfull";
  }else{
      $msg="image uload unsuccessfull";
  }
}


 ?>

 <html>
 <head>
<meta http-equiv="refresh" content="0; url=http://localhost/Final/profile.php">
</head>
</html>
