<!DOCTYPE html>
<?php
    session_start();

    $db=mysqli_connect("localhost","root","","corridor1");

    $qry = "SELECT * FROM login_details";
    $result= mysqli_query($db,$qry);
?>
<html lang="en">
<head>
  <style>
  #customers {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
  }

  #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;
  }

  #customers tr:nth-child(even){background-color: #f2f2f2;}

  #customers tr:hover {background-color: #ddd;}

  #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: grey;
      color: white;
  }
  </style>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/form-elements.css">

  <title>Admin Pannel</title>
</head>
<body>
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
        <ul class="nav navbar-nav">
          <li><a href="status.php">Statistics</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
  </header>

<div class="container" id="main" style="position: relative;min-width: 1000px;">
  <div id="areaToPrint">
    <h3>Monthly User Login Report</h3>
      <table id="customers">
        <t>
          <tr>
        <th>Tudent Number</th>
        <th>Login Date</th>

      </tr>
          </t>
          <?php
          while($rows=mysqli_fetch_array($result))
          {
              ?>
          <tr>
              <td><?php echo $rows['stuno'];?></td>
              <td><?php echo $rows['login_date'];?></td>
          </tr>
          <?php
          }?>
    </table>
  </div>

<button onclick="printDiv();">Print Report</button>
</div>
<script>
    function printDiv() {
        var divToPrint = document.getElementById('areaToPrint');
        newWin = window.open("");
        newWin.document.write(divToPrint.outerHTML);
        newWin.print();
        newWin.close();
   }
</script>



<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
