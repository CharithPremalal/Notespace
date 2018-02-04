<?php
session_start();

$user="root";
$server="localhost";
$pwd="";
$db="corridor1";

$fname=$_REQUEST["FName"];
$lname=$_REQUEST["LName"];
$lstuno=$_REQUEST["stuno"];
$email=$_REQUEST["email"];
$batch=$_REQUEST["batch"];
$passwrd=$_REQUEST["pw"];
$cpw=$_REQUEST["cpw"];
$gender=$_REQUEST["gender"];



$con= new mysqli($server,$user,$pwd,$db);
$qry="INSERT INTO user(fname, lname, stu_no, email, password, batch, gender) VALUES ('$fname','$lname','$lstuno','$email','$passwrd','$batch','$gender')";



if($passwrd==$cpw)
{
    if($con->connect_error)
{
    die("Corridor is having trouble with the connection to the database");
}
else
{
    if($con->query($qry)==true)
    {
        $_SESSION['lstuno']=$_POST['lstuno'];
	header("Location: settings.php");
    }
    else
    {
        echo"There has been an error with this page. We will redirect you to the last page in a moment";
        header( "refresh:5;url=index.php" );
    }
}}
else
{
    echo"Passwords doesn't match";
    header( "refresh:5;url=index.php" );
}

?>