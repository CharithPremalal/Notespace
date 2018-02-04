<?php
session_start();

$stuno= $_SESSION['lstuno'];
$cpw= $_REQUEST["cpw"];
$npw= $_REQUEST["npw"];
$vpw= $_REQUEST["vpw"];

$user="root";
$server="localhost";
$pwd="";
$db="corridor1";

$conn= mysqli_connect("$server","$user","$pwd","$db");
$select= "SELECT password FROM `user` WHERE stu_no=\"$stuno\"";
$reset="UPDATE user SET password='$npw' WHERE stu_no=\"$stuno\"";

$result=mysqli_query($conn,$select);

$c= mysqli_fetch_array($result);
$cpwrd=$c[0];



if($cpwrd==$cpw)
{
    if($npw==$vpw)
    {
        
    mysqli_query($conn,$reset);
    $rows=mysqli_affected_rows($conn);
    
    if($rows==1)
    {
        echo"Change successfull";
        header( "refresh:3;url=profile.php");
        
    }
    else
    {
        echo"Eroor. Try again";
        header( "refresh:3;url=settings.php");
    }}
    else
    {
        echo"please check wether the passwords match";
        header( "refresh:3;url=settings.php");
    }
}
else
{
    echo"Please check whether you have entered the correct password.";
    
}

?>