<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/form-elements.css">
  <link rel="stylesheet" href="css/style1.css">
  <title>Bootstrap</title>
</head>
<body>
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
    <div class="slideshow" style="float:left;">
       	 <?php
    		include("slide.php")
    	?>
            	<div id="quote">
             		 <h2><script type="text/javascript" src="https://www.brainyquote.com/link/quotebr.js"></script></h2>
            	</div>
    	</div>
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
                            <input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username">
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
                      <form role="form" action="" method="post" class="registration-form">
                        <div class="form-group">
                          <label class="sr-only" for="form-first-name">First name</label>
                            <input type="text" name="form-first-name" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
                          </div>
                          <div class="form-group">
                            <label class="sr-only" for="form-last-name">Last name</label>
                            <input type="text" name="form-last-name" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">
                          </div>
                          <div class="form-group">
                            <label class="sr-only" for="form-email">Email</label>
                            <input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
                          </div>
                          <div class="form-group">
                            <label class="sr-only" for="form-about-yourself">About yourself</label>
                            <textarea name="form-about-yourself" placeholder="About yourself..."
                                  class="form-about-yourself form-control" id="form-about-yourself"></textarea>
                          </div>
                          <button type="submit" class="btn">Sign me up!</button>
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