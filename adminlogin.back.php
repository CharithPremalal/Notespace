<?php
session_start();
$user="root";
$server="localhost";
$pwd="";
$db="notespace";

if(isset($_POST['log_btn']))
{
$username= $_POST["username"];
$password= $_POST["pwrd"];

$conn= mysqli_connect("$server","$user","$pwd","$db");


$qry="SELECT * FROM `user` WHERE email=\"$username\" AND password=\"$password\"";

mysqli_query($conn,$qry);
$rows=mysqli_affected_rows($conn);

 if($rows==1)
  {
    $_SESSION['email']=$email;//setting session ID

     if(mysqli_query($conn,$send_qry))
     {
        header('Location:status.php');
         echo "done";
     }

  }
    else
    {
        $error_message = "Email or password invalid";
    }
}
?>

<html>
    <body>
        <form name="login" id="login" action="./login.php" method="post">
            <input type="text" placeholder="Admin ID" required id="username" name="username"><br>
            <input type="password" placeholder="Password" required id="pwrd" name="pwrd"><br>
            <div id="error"><?php if(isset($error_message)){echo $error_message;}?></div>
            <br>
            <input type="submit" id="log_btn" value="login" name="log_btn">

           </form>
    </body>
</html>
