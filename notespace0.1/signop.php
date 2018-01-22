<?php
session_start();

$user="root";
$server="localhost";
$pwd="";
$db="notespace_0.1";
$con= new mysqli($server,$user,$pwd,$db);


$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$password = $_POST["pwrd"];
$cpassword = $_POST["rpwrd"];


function generatePin($digits)//generate the login code
{
    $i = 0;//counter
    $pin="";
    while ($i<$digits)
    {
        $pin .= mt_rand(0, 9);
        $i++;
    }
    return $pin;
}

$code= generatePin(4); //change the number to change the length of the query

//setting up for the email
$from = "test@localhost"; //change this address when we get the server.
$subject  =   $code;
$message  =   $code;
$headers  = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

//setting up values for the database
$con= new mysqli($server,$user,$pwd,$db);
$qry="INSERT INTO temp_user(fname, lname, email, password, code) VALUES ('$fname','$lname','$email','$password','$code')"; //insert query to temp_reg table


if($con->connect_error)
{
    echo 'b';
}
else
{
    if($con->query($qry)==true)
    {
       
        $_SESSION["email"]=$email;
	    //sending the code through mail. use stmp4dev to recieve the mail when testing from localhost
        if(mail($email, $subject, $message, $headers))
        {
            header("Location: con_code.php");
            
        }
        else
        {
            echo 'd';// ... or this one to tell it that it wasn't sent    
        }
    }
    else
    {
        echo"e";
        //header( "refresh:10;url=signup.php" );
    }
}



?>