

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/form-elements.css">

  <title>NOTE|SPACE</title>
</head>

  <header>
  <div class="container"><h1><a href="home.html" id="title">NOTE|SPACE</a></h1></div>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav navbar-right">
      <li><a href="register.php">Register</a></li>

      </ul>
    </div>
  </div>
  </nav>
  </header>
<body>
<?php
session_start();
$user="root";
$server="localhost";
$pwd="";
$db="corridor1";

if(isset($_POST['log_btn']))
{
$username= $_POST["username"];
$password= $_POST["pwrd"];

$conn= mysqli_connect("$server","$user","$pwd","$db");


$qry="SELECT * FROM admin WHERE username=\"$username\" AND password=\"$password\"";

mysqli_query($conn,$qry);
$rows=mysqli_affected_rows($conn);

 if($rows==1)
  {
    $_SESSION['username']=$username;//setting session ID

     if(mysqli_query($conn,$qry))
     {
        header('Location:status.php');

     }

  }
    else
    {
        $error_message = "Email or password invalid";
    }
}
?>
  <div class="top-content">
          <div class="inner-bg">
          <div class="container">
             <div class="row">
                  <div class="col-sm-5">

<div class="form-box">
  <div class="form-top">
    <div class="form-top-left">
      <h3><script type="text/javascript" src="https://www.brainyquote.com/link/quotebr.js"></script></h3>
    </div>

    </div>

</div>
                  </div>

                  <div class="col-sm-1 middle-border"></div>
                  <div class="col-sm-1"></div>
                  <div class="col-sm-5">

                    <div class="form-box">
                      <div class="form-top">
                        <div class="form-top-left">
                          <h3>Login to our site</h3>
                            <p>Enter username and password to log on:</p>
                        </div>
                        <div class="form-top-right">
                          <i class="fa fa-key"></i>
                        </div>
                        </div>
                       <form name="login" id="login" action="./adminlogin.php" method="post">
            <input type="text" placeholder="Admin ID" required id="username" name="username"><br>
            <input type="password" placeholder="Password" required id="pwrd" name="pwrd"><br>
            <div id="error"><?php if(isset($error_message)){echo $error_message;}?></div>
            <br>
            <input type="submit" id="log_btn" value="login" name="log_btn">

           </form>
                    </div>
                  </div>



                  </div>

              </div>

          </div>
      </div>

  </div>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">

        <div class="col-sm-8 col-sm-offset-2">
          <div class="footer-border"></div>
          <p>Murctech© Allrights Reserverd.<i class="fa fa-smile-o"></i></p>
        </div>

      </div>
    </div>
  </footer>

  <!-- Javascript -->
  <script src="assets/js/jquery-1.11.1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/scripts.js"></script>






<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
