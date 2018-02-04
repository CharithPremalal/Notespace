<?php
session_start();

$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$email = $_REQUEST['email'];
$no=$_REQUEST['number'];
$company= $_REQUEST['company'];
$side= $_REQUEST['side'];
$pic = $_REQUEST['pic'];
$des= $_REQUEST['des'];

$user="root";
$server="localhost";
$pwd="";
$db="corridor";
$con= new mysqli($server,$user,$pwd,$db);
$qry="INSERT INTO ads(firstName, lastName, email, phno, companyName, image, adLocation, adDescription) VALUES ('$fname','$lname','$email','$no','$company','$pic','$side', '$des')";

 if($con->connect_error)
{
    die("Corridor is having trouble with the connection to the database");
}
else
{
    if($con->query($qry)==true)
    {
        echo"your ad has bees submitted. You will be contacted by us as soon as possible.";   
        header( "refresh:3;url=promote.php" );
    }
    else
    {
        echo"There has been an error with this page. We will redirect you to the last page in a moment";
        header( "refresh:5;url=promote.php" );
    }
}
?>