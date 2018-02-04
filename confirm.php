<?php
    session_start();
    $lstuno=$_SESSION['lstuno'];

if(isset($_POST['send_code']))
{
    $c_code= $_POST['code'];

    $server="localhost";
    $user="root";
    $password="";
    $db="notespace";

    $con= new mysqli($server,$user,$password,$db);
    $sql="SELECT code FROM temp_user WHERE stuno='$lstuno'";//fetch query from temp user


    $db=mysqli_connect($server,$user,$password,$db);
    $result=mysqli_query($db,$sql);//select from temp_user

    if($con->connect_error)
{
    $error_message= "Notespace is having trouble with the server";
}

//$qry= "INSERT INTO user(fname,lname,email, password) VALUES ('$fname','$lname','$email','$password')";//insert query for user
//$id_qry="SELECT user_id FROM user WHERE email='$email'";
//$result =mysqli_query($db,$id_qry);//select user id

if($c_code==$c_code)//comparing codes
{
	header("Location:profile.php");//to the profile page
}
else
{
    $errr_message= "Code doesn't match";
}
}

?>

<html>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="shortcut icon" href="style\favicon.ico"/>
<link href="style\post.css" rel="stylesheet" type="text/css">
<link href="style\style.css" rel="stylesheet" type="text/css">

</head>
<body>
<article>
		
			<div class="post">
				
        <form id="veri" method="post" action="./confirm.php">
            <input type="text" maxlength="4" size="4" name="code" required><br><div id="alert"><?php if(isset($error_message)){echo $error_message;}?></div>
            <input type="submit" name="send_code" id="send_code">
        </form>
        <div id="alert2"><?php if(isset($errr_message)){echo $errr_message;}?></div>
			</div>
</article>
    
    </body>


</html>
