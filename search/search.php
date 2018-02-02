<!DOCTYPE html>
<html>
<head>
 <title></title>
 <style type="text/css">

 input{
  width: 400px;
  font-size: 24px;
 }
  #here
  {
   width: 400px;
   height: 300px;
   border: 1px solid grey;
   display: none;
  }
  #here a{
   display: block;
   width: 98%;
   padding: 1%;
   font-size: 20px;
   border-bottom: 1px solid grey;
  }
 </style>

</head>
<body>

        <input type="search" name="search" placeholder="Search Names" id="search" >
        <div id="here"></div>
        

<script src="jq.js"></script>
<script>
    $(document).ready(function(e) {
        $("#search").keyup(function() {
            $("#here").show();
            var x = $(this).val();
            $.ajax({
                type: 'GET',
                url: 'fetch.php',
                data: 'q=' +x,
                success: function(data) {
                    $("#here").html(data);
                },
            });
        });
    });

</script>
</body>
</html>?