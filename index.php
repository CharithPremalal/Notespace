<?php
	session_start();

$user="root";
$server="localhost";
$pwd="";
$db="corridor1";

if(isset($_POST['sub']))
{

$fname=$_REQUEST["FName"];
$lname=$_REQUEST["LName"];
$lstuno=$_REQUEST["stuno"];
$email=$_REQUEST["email"];
$batch=$_REQUEST["batch"];
$passwrd=$_REQUEST["pw"];
$cpw=$_REQUEST["cpw"];
$gender=$_REQUEST["gender"];

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

$con= new mysqli($server,$user,$pwd,$db);
$qry="INSERT INTO user(fname, lname, stu_no, email, password, batch, gender,code) VALUES ('$fname','$lname','$lstuno','$email','$passwrd','$batch','$gender','$code')";

if($passwrd==$cpw)
{
    if($con->connect_error)
{
    $error = "Connection Error";
}
else
{
    if($con->query($qry)==true)
    {
        $_SESSION['lstuno']=$_POST['stuno'];
	if(mail($email, $subject, $message, $headers))
        {
            header("location:confirm.php");
        }
	else
	{
		$error = "Email Error";
	}
    }
    else
    {
        $error="Database error";
    }
}}
else
{
    $error="Passwords doesn't match";
}
}

//login function

if(isset($_POST['log']))
{

$lstuno= $_REQUEST["lstuno"];
$lpw= $_REQUEST["lpw"];


$date=date("d/m/y");
$conn= mysqli_connect("$server","$user","$pwd","$db");


$qry="SELECT * FROM `user` WHERE stu_no=\"$lstuno\" AND password=\"$lpw\"";

$send_qry="INSERT INTO login_details(stuno, login_date) VALUES ('$lstuno','$date')";

mysqli_query($conn,$qry);
$rows=mysqli_affected_rows($conn);

 if($rows==1)
  {

      $_SESSION['lstuno']=$_POST['lstuno'];//setting session ID

     if(mysqli_query($conn,$send_qry))
     {
			 if($lstuno=='admin'){
			 header('Location:status.php');
		 	}else{
			 header('Location:profile.php');
		 			}

     }

  }
    else
    {
        $error_message = "Email or password invalid";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="style\favicon.ico"/>
<link href="style\index.css" rel="stylesheet" type="text/css">
<link href="style\post.css" rel="stylesheet" type="text/css">
<title>Note|Spacec</title>
</head>
<body>



<header>
<h1>Note|Space</h1>
<div class="nav"><ul>
         <form name="login" method="POST" action="./index.php" >
     <input type="text" name="lstuno" placeholder="Student Number">
    <input type="password" name="lpw" placeholder="Password" required>
    <input type="submit" name="log" id="log" value="Login">
	<div id="alert2">
        <?php if(isset($error_message)){echo $error_message;}?>
        </div>
    </form></ul>
    </div>
</header>


<div id="container">
<article >



	<div class="slideshow" style="float:left;">
   	 <?php
		include("slide.php")
	?>
        	<div id="quote">
         		 <h2><script type="text/javascript" src="https://www.brainyquote.com/link/quotebr.js"></script></h2>
        	</div>
	</div>

	<div class="post" style="float:right;">
				<h2 class="title">Join Community</h2>
				<div class="entry">

    <form name="signup" method="POST" action="./index.php" >

        <input required type="text" name="FName" placeholder="First Name">
	<br>
        <input required  type="text" name="LName" placeholder="Last Name">
	<br>
        <input  required maxlength="18"  type="text" name="stuno" placeholder="Student Number">
	<br>
        <input type="email" name="email" placeholder="e-mail address" required>
	<br>
        <input type="text" name="batch" required maxlength="10" minlength="6" placeholder="Batch(eg: DSE161)">
        <input type="password" name="pw" placeholder="Password" required maxlength="20" minlength="6">
	<br>Password must contain 6-20 characters<br>
        <input type="password" name="cpw" placeholder="Confirm Password" maxlength="20" minlength="6" required><br>

        Select Gender &nbsp;&nbsp;<input type="radio" name="gender" value="M">Male&nbsp;&nbsp;<input type="radio" name="g" value="F">Female<br><br>
        <input type="submit" id="sub" name="sub" value="Join">

	<div id="alert2">
        <?php if(isset($error)){echo $error;}?>
        </div>
    </form>
				</div>
			</div>










</article>
</div>

</body>
</html>
