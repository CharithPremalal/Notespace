<html>
    <?php
        session_start()
    ?>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <form name="vrfy" method="post" action="verify.php">
            <p>Insert the code you recieved in mail to verify your acount</p>
            <input type="text" maxlength="4" name="code" placeholder="____" size="4" required><br>
            <input type="submit" id="click" value="Verify"><div id="code_error"></div>
        </form>
        <div id="alert"></div>
        <div id="alert2"></div>
    </body>
    
    <script type="text/javascript">

    $("#click").click(function(event){
    	event.preventDefault();
    	
    	var vrfy = document.getElementById("vrfy");
         var fd = new FormData(vrfy );
    $.ajax({
        url: "./verify.php",
        data: fd,
        cache: false,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (dataofconfirm) {
            if(dataofconfirm == 1){
              $('#alert').html('<div class="alert alert-danger"><strong>Notespace is having trouble with the database right now.Please try again or you might be trying to register with a used email</strong>.</div>');
            }else{
   $('#alert2').html('<div class="alert alert-danger"> <strong>Please check the code we sent to your email</strong></div>');
            }
        }
    });
    });



</script>
</html>