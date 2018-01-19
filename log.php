<?php
$name=$_POST['uname'];
$password=$_POST['pswd'];
if(isset($_POST['sub'])){
  $db=mysqli_connect("localhost","root","","note_space");
  $query1="SELECT * FROM login ";
  $result=mysqli_query($db,$query1);
  if($result!=$password){
    echo"error1";
    echo $result;
  }

}
?>
