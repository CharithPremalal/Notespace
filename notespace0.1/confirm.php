<?php
    session_start();
    $email=$_SESSION['email'];

if(isset($_POST['send_code']))
{
    $c_code= $_POST['code'];
    $server="localhost";
    $user="charith";
    $password="lakshitha";
    $db="notespace";
    
    $con= new mysqli($server,$user,$password,$db);
    $sql="SELECT*FROM temp_user WHERE email='$email'";//fetch query from temp user


    $db=mysqli_connect($server,$user,$password,$db);
    $result=mysqli_query($db,$sql);//select from temp_user

    if($con->connect_error)
{
    $error_message= "Notespace is having trouble with the server";
}
while($row=mysqli_fetch_array($result))
{
    $fname=$row['fname'];
    $lname=$row['lname'];
    $em=$row['email'];
    $password=$row['password'];
    $code=$row['code'];
   
}
$qry= "INSERT INTO user(fname,lname,email, password) VALUES ('$fname','$lname','$email','$password')";//insert query for user
$id_qry="SELECT user_id FROM user WHERE email='$email'";
$result =mysqli_query($db,$id_qry);//select user id

if($c_code==$code)//comparing codes
{
    
    if($con->query($qry)==true)//sending values to user table
    {
       
      header('Location:profile.html');
    }
    else
    {
        $error_message= "Notespace is having trouble with the server";
    }
    
    
}
else
{
    $errr_message= "Code doesn't match";
}
}

?>

<html>
   
    <body>
        <form id="veri" method="post" action="./confirm.php">
            <input type="text" maxlength="4" size="4" name="code" required><br><div id="alert"><?php if(isset($error_message)){echo $error_message;}?></div>
            <input type="submit" name="send_code" id="send_code">
        </form>
        <div id="alert2"><?php if(isset($errr_message)){echo $errr_message;}?></div>
    </body>
    
    
</html>