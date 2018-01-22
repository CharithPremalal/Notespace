<?php

session_start();
$email = $_SESSION['email'];

$user="root";
$server="localhost";
$pwd="";
$db="notespace_0.1";
$a=".....";
$c_code= $_POST["code"];

$con= new mysqli($server,$user,$pwd,$db);
$sql="SELECT*FROM temp_user WHERE email='$email'";//fetch query from temp user


$db=mysqli_connect($server,$user,$pwd,$db);
$result=mysqli_query($db,$sql);//select from temp_user


if($con->connect_error)
{
    die("Notespace is having trouble with the connection to the database");
}
while($row=mysqli_fetch_array($result))
{
    $fname=$row['fname'];
    $lname=$row['lname'];
    $em=$row['email'];
    $password=$row['password'];
    $code=$row['code'];
   
}
mysqli_free_result($result);

$qry= "INSERT INTO user(fname,lname,email, password) VALUES ('$fname','$lname','$email','$password')";//insert query for user
$id_qry="SELECT user_id FROM user WHERE email='$email'";
$result =mysqli_query($db,$id_qry);//select user id

if($c_code==$code)//comparing codes
{
    
    if($con->query($qry)==true)//sending values to user table
    {
     while ($value=mysqli_fetch_field($result)) //fetching user id from user table
        {
            $user_id = $row['user_id'];
            
        }
       
    }
    else
    {
        echo "1";
    }
    
    
}
else
{
    echo "0";
}
//echo $user_id;

?>
