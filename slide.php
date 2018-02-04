<script type = "text/javascript">
          function displayNextImage() {
              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img").src = images[x];
          }
          function startTimer() {
              setInterval(displayNextImage, 2000);
          }

          var images = [], x = -1;
          images[0] = "slide1.jpg";
          images[1] = "slide2.jpg";
          images[2] = "slide3.jpg";
      </script>
<body onload = "startTimer()">
 <img id="img" src="startpicture.jpg" style="max-width: 800px;"/>
</body>