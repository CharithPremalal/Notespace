<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/form-elements.css">
  <link href="css/landing-page.min.css" rel="stylesheet">
  <link href="css/landing-page.css" rel="stylesheet">


  <title>NoteSpace</title>
</head>
<body>
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
  <header>
  <div class="container"><h1><a href="home.html" id="title">NOTE|SPACE</a></h1></div>
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">

      <ul class="nav navbar-nav navbar-left">

        <li><a href=""></a></li>
      </ul>

    </div>
  </nav>
  </header>
  <div class="top-content">
          <div class="inner-bg">
          <div class="container">
             <div class="row">
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
                        <div class="form-bottom">
                      <form role="form" action="" method="post" class="login-form">
                        <div class="form-group">
                          <label class="sr-only" for="form-username">Username</label>
                            <input type="email" name="form-username" placeholder="Email..." class="form-username form-control" id="form-username">
                          </div>
                          <div class="form-group">
                            <label class="sr-only" for="form-password">Password</label>
                            <input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
                          </div>
                          <button type="submit" class="btn">Sign in!</button>
                      </form>
                    </div>
                  </div>

                <div class="social-login">

                      <div class="social-login-buttons">


                      </div>
                    </div>

                  </div>

                  <div class="col-sm-1 middle-border"></div>
                  <div class="col-sm-1"></div>

                  <div class="col-sm-5">

                    <div class="form-box">
                      <div class="form-top">
                        <div class="form-top-left">
                          <h3>Sign up now</h3>
                            <p>Fill in the form below to get instant access:</p>
                        </div>
                        <div class="form-top-right">
                          <i class="fa fa-pencil"></i>
                        </div>
                        </div>
                        <div class="form-bottom">
                      <form id="reg" method="post" action="./register.php">
                        <div class="form-group">
                          <label class="sr-only" for="form-first-name">First name</label>
                            <input type="text" placeholder="First Name" required name="fname">
                          </div>
                          <div class="form-group">
                            <label class="sr-only" for="form-last-name">Last name</label>
                            <input type="text" placeholder="Last Name" required name="lname">
                          </div>
                          <div class="form-group">
                            <label class="sr-only" for="form-email">Email</label>
                            <input type="email" placeholder="E-mail" required name="email">
                          </div>
                          <div class="form-group">
                            <label class="sr-only" for="form-password">Password</label>
                            <input type="password" placeholder="Password" required name="password" minlength="6" maxlength="25" id="password">
                          </div>
                          <div class="form-group">
                            <label class="sr-only" for="form-password">Re-Enter Password</label>
                            <input type="password" placeholder="Confirm password" required name="confirm_pwrd" minlength="6" maxlength="25"
                   id="confirm_password"><br><div id="alert">
                       <?php if(isset($error_message)){echo $error_message;} ?>
                   </div>
                          </div>
                          <input type="submit" id="click" name="click" value="Sign Up">
                      </form>
                      <div id="alert2">
<?php if(isset($errr_message)){echo $errr_message;}?>
</div>
                    </div>
                    </div>

                  </div>
              </div>

          </div>
      </div>

  </div>
  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">Build a landing page for your business or project and generate more leads!</h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form>
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
              </div>
              <div class="col-12 col-md-3">
                <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </header>

  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-screen-desktop m-auto text-primary"></i>
            </div>
            <h3>Fully Responsive</h3>
            <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-layers m-auto text-primary"></i>
            </div>
            <h3>Bootstrap 4 Ready</h3>
            <p class="lead mb-0">Featuring the latest build of the new Bootstrap 4 framework!</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-primary"></i>
            </div>
            <h3>Easy to Use</h3>
            <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials text-center bg-light">
    <div class="container">
      <h2 class="mb-5">What people are saying...</h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="images/testimonials-1.jpg" alt="">
            <h5>Margaret E.</h5>
            <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="images/testimonials-2.jpg" alt="">
            <h5>Fred S.</h5>
            <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="images/testimonials-3.jpg" alt="">
            <h5>Sarah	W.</h5>
            <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="call-to-action text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h2 class="mb-4">Ready to get started? Sign up now!</h2>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form>
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
              </div>
              <div class="col-12 col-md-3">
                <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">About</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Contact</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Start Bootstrap 2017. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fa fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fa fa-twitter fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fa fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
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

<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
