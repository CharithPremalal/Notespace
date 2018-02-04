<?php
session_start();

      $id4=$_POST['a'];
    $studno=$_SESSION['lstuno'];

  $text1="";
  if(isset($_POST['sub1'])){

    $db1=mysqli_connect("localhost","root","","corridor1");
    if($db1){
      echo"con works";
    }
    else{
      echo"con doesnt work";
    }
        $time=date("H:m:s");
       $cid="$studno+$id4+$time";
    $text1=$_POST['cmnt'];
    $sql1="INSERT INTO comments(c_id,p_id,stud_no,c_body,c_vote) VALUES('$cid','$id4','$studno','$text1','4')";
    if(mysqli_query($db1,$sql1)){
      echo"done";
    }
    else{echo"error:".mysqli_error($db1);}

  }





 ?>
 <html>
 <head>
<meta http-equiv="refresh" content="0; url=http://localhost/Final/home.php">
</head>
</html>
