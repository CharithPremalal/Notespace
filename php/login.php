<?php
$userName=$_POST['userName'];
$Password=$_POST['Password'];

$db=mysqli_connect("localhost","root","","chat");
  $query1="SELECT password FROM members WHERE userName=$userName ";
  $result=mysqli_query($db,$quer);
	if($result){

		echo"done works!";
    echo $query1;
	}
	else{
		echo"data not send";
	}

 ?>
