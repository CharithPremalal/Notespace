<?php
if( !empty ($_GET['q']))
{
   include 'connect.php';
   $q=$_GET['q'];
   $query="select * from pasan where Name like '%$q%'";
   $result=mysqli_query($conn,$query);
   while($output=mysqli_fetch_assoc($result))
   {
       echo '<a>'.$output['Name'].'</a>';
   }
}
?>