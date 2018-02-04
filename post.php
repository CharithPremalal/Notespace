<?php
 session_start();
 ?>


<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="shortcut icon" href="style\favicon.ico"/>
<link href="style\post.css" rel="stylesheet" type="text/css">
<link href="style\style.css" rel="stylesheet" type="text/css">

</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php

include("header.php")
?>


<div id="container" style="inline-block ; height: 100%" >

<div id="slider" >
<?php
include("leftslider.php")
?>
</div>


    <article>
    		<div id="content">
    <?php
  $db=mysqli_connect("localhost","root",""
  ,"corridor1");


$p="";
  $p=$_POST['varname'];

    $studno=$_SESSION['lstuno'];
  $sql="SELECT *FROM post WHERE p_id='$p'";
  $result=mysqli_query($db,$sql);

  while($row=mysqli_fetch_array($result)){
    echo"<div class='post'>";
    echo"<h2 class='title'><a href='b.html'>".$row['heading']."</a></h2>";
    echo"<p class='meta'>Posted by <a href='#'>Someone</a> on March 10, 2008
      &nbsp;&bull;&nbsp; <a href='a.html' class='comments'>Comments (64)</a> &nbsp;&bull;&nbsp; <a href='#' class='permalink'>Full article</a></p>";
  echo"<div class='entry'>";
    echo"<img src='./".$row['p_pic']."'height='350' width='350'>";
     echo"<p>".$row['p_body']."</p>";
     echo"<p><input type='button' value='vote' ></p>";


     echo"</div>
   </div>";



echo"<form name='c' method='POST' action='postInput.php'>";
   echo"<div class='post'>";
   echo"<p>comment:'$studno'</p>";
    echo"<p><textarea name='cmnt'></textarea></p>";
      echo"<input type='hidden' name='postid' vlaue='$p'>";
      $n=$row['p_id'];
      echo"<input type='hidden' name='a' value='$n'>";
    echo"<p><input type='submit'  class='btn' value='post' name='sub1'></p>";

    echo"</div>";
    echo"</form>";
 }

?>

 <?php
 $p="";
   $p=$_POST['varname'];
$db=mysqli_connect("localhost","root",""
,"corridor1");
$sql1="SELECT fname FROM user WHERE p_id='$p'";
$sql="SELECT *FROM comments WHERE p_id='$p'";
$result=mysqli_query($db,$sql);
$result1=mysqli_query($db,$sql1);
while($row=mysqli_fetch_array($result)){
  echo"<div class='post'>";
  echo "<p>comment by: </p>";
  echo"<p>".$row['c_body']."</p>";
}
  echo"</div>";
?>
