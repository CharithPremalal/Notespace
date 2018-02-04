<?php
	$db=mysqli_connect("localhost","root","","corridor1");
  $sql="SELECT*FROM ads";
  $result=mysqli_query($db,$sql);

while( $row=mysqli_fetch_array($result)){

$a=$row['image'];

//echo"$a";



    }



?>




<script type = "text/javascript">
          function displayNextImage() {
              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img").src = images[x];
          }
          function startTimer() {
              setInterval(displayNextImage, 1000);
          }

          var images = [], x = -1;
                    images[0] =   "<?php echo"$a"; ?>";
                    images[1] =   "ad2.jpg";


      </script>
 <body onload = "startTimer()">
       <img id="img" src="startpicture.jpg" style="max-width: 220px; max-height: 550px;margin: 15px;"/>

   </body>
