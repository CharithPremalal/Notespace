<!DOCTYPE html>
<html>

<head>
<title>Promote</title>
<link href="style\post.css" rel="stylesheet" type="text/css">
<link href="style\style.css" rel="stylesheet" type="text/css">
<link href="style\home.css" rel="stylesheet" type="text/css">

  <script src="https://www.paypalobjects.com/api/checkout.js"></script>
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
	<div class="post">
		<h2 class="title">Make An Advertisement</h2>
				<div class="entry">
				<form id="form1" name="form1" method="post" action="inputAdvt.php" enctype="multipart/form-data">
  <table border="0"cellpadding="5" align="center">
      <tr>
        <td>Contact Person</td>
        <td><input type="text" name="fname" id="fname" placeholder="First Name"><input type="text" name="lname" id="lname" placeholder="Last Name"></td>
      </tr>
      <tr>
        <td>E-mail</td>
        <td><input type="text" name="email" id="email" placeholder="name@example.com"></td>
      </tr>
      <tr>
        <td>Phone Number</td>
        <td><input type="text" name="number" id="number"></td>
      </tr>
      <tr>
        <td>Company Name</td>
        <td><input type="text" name="company" id="number"></td>
      </tr>
      <tr>
        <td>Attach Image</td>
        <td><input type="file" name="advt"></td>
      </tr>
      <tr>
        <td>Ad Location</td>
        <td>
          <select name="location" id="select">
	<option disabled selected value>Please Select</option>
	<option value="left">Left Side</option>
	<option value="right">Right Side</option>
        </select></td>
      </tr>
      <tr>
        <td></td>
        <td><textarea name="textarea" id="textarea" placeholder="Ad Description"></textarea>
<div id="paypal-button-container"></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
		
        <td><input type="reset" name="reset" id="reset" value="Clear">          <input type="submit" name="submit" id="submit" value="Submit"></td>
      </tr>
  </table>
</form>
				<div>
	</div>
</article>

<div id="slider" >
<?php
include("rightslider.php")
?>
</div>

</div>
<script>
    paypal.Button.render({

        env: 'sandbox', // sandbox | production

        // PayPal Client IDs - replace with your own
        // Create a PayPal app: https://developer.paypal.com/developer/applications/create
        style: {
            layout: 'vertical',  // horizontal | vertical
            size:   'medium',    // medium | large | responsive
            shape:  'rect',      // pill | rect
            color:  'gold'       // gold | blue | silver | black
        },

        // Specify allowed and disallowed funding sources
        //
        // Options:
        // - paypal.FUNDING.CARD
        // - paypal.FUNDING.CREDIT
        // - paypal.FUNDING.ELV

        funding: {
            allowed: [ paypal.FUNDING.CARD, paypal.FUNDING.CREDIT ],
            disallowed: [ ]
        },
        client: {
            sandbox:    'AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R',
            production: '<insert production client id>'
        },

        // Show the buyer a 'Pay Now' button in the checkout flow
        commit: true,

        // payment() is called when the button is clicked
        payment: function(data, actions) {

            // Make a call to the REST api to create the payment
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: { total: '1500.00', currency: 'LKR' }
                        }
                    ]
                }
            });
        },

        // onAuthorize() is called when the buyer approves the payment
        onAuthorize: function(data, actions) {

            // Make a call to the REST api to execute the payment
            return actions.payment.execute().then(function() {
                window.alert('Payment Complete!');
            });
        }

    }, '#paypal-button-container');

</script>
</body>
</html>
