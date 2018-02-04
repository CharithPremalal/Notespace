<?php
session_start();

$lstuno= $_REQUEST["lstuno"];
$lpw= $_REQUEST["lpw"];


//preventing mysql injection

$lstuno= stripcslashes($lstuno);
$lpw = stripcslashes($lpw);


$user="root";
$server="localhost";
$pwd="";
$db="corridor1";

$conn= mysqli_connect("$server","$user","$pwd","$db");


$qry="SELECT * FROM `user` WHERE stu_no=\"$lstuno\" AND password=\"$lpw\"";

mysqli_query($conn,$qry);
$rows=mysqli_affected_rows($conn);

 if($rows==1)
  {
      $_SESSION['lstuno']=$_POST['lstuno'];
     header('Location:profile.php');
  }
    else
    {
        echo"Invalid username or password.";
        header( "refresh:3;url=index.php");
        $conn->close();
    }



?>