<?php
    session_start();
    $server="localhost";
    $user="charith";
    $password="lakshitha";
    $db="notespace";



 if(isset($_POST['click'])){



    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $pwrd = $_POST["password"];
    $cpwrd = $_POST["confirm_pwrd"];//i have changed the wrong name



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
     $from = "admin@notespace.xyz"; //change this address when we get the server.
     $subject  =   $code;
    $message  =   $code;
     $headers  = "From: $email\r\n";
     $headers .= "Reply-To: $email\r\n";

     //setting up values for the database
     $con= new mysqli($server,$user,$password,$db);
     $qry="INSERT INTO temp_user(fname, lname, email, password, code) VALUES ('$fname','$lname','$email','$pwrd','$code')"; //insert query to temp_reg table


if($pwrd==$cpwrd)
{


    if(mysqli_query($con,$qry))
    {
        echo "Data Inserted";
        $_SESSION["email"]=$email;

        if(mail($email, $subject, $message, $headers))
        {
            header("location:confirm.php");
        }
        else
        {
           $errr_message="Email server error";
        }

    }
    else
    {
       $errr_message="Database error";
    }

}
else
{
    $error_message = "password doesnt match";
}

}


?>


<html>

    <body>
        <form id="reg" method="post" action="./register.php">
            <input type="text" placeholder="First Name" required name="fname"><br>
            <input type="text" placeholder="Last Name" required name="lname"><br>
            <input type="password" placeholder="Password" required name="password" minlength="6" maxlength="25"
                   id="password"><br>
            <input type="password" placeholder="Confirm password" required name="confirm_pwrd" minlength="6" maxlength="25"
                   id="confirm_password"><br><div id="alert">
                       <?php if(isset($error_message)){echo $error_message;} ?>
                   </div>
             <input type="email" placeholder="E-mail" required name="email"><br>

            <input type="submit" id="click" name="click" value="Sign Up">
        </form>
        <div id="alert2">
        <?php if(isset($errr_message)){echo $errr_message;}?>
        </div>

    </body>




</html>
