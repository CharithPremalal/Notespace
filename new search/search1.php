<html>
<head>
<titel></titel>
<style type="text/css">
            #container{
               width:800px;
               margin:0 auto;
            }
 
            #search{
               width:700px;
               padding:10px;
            }
 
            #button{
               display: block;
               width: 100px;
               height:30px;
               border:solid #366FEB 1px;
               background: #91B2FA;
            }
 
            ul{
                margin-left:-40px;
            }
 
            ul li{
                list-style-type: none;
                border-bottom: dotted 1px black;
              height: 50px;
            }
 
            li:hover{
                background: #A592E8;
            }
 
            a{
                text-decoration: none;
              font-size: 18px;
            }
        </style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                  
                 function search(){
 
                      var title=$("#search").val();
 
                      if(title!=""){
                        $("#result").html("<img alt="ajax search" src='ajax-loader.gif'/>");
                         $.ajax({
                            type:"post",
                            url:"search.php",
                            data:"title="+title,
                            success:function(data){
                                $("#result").html(data);
                                $("#search").val("");
                             }
                          });
                      }
                       
 
                      
                 }
 
                  $("#button").click(function(){
                     search();
                  });
 
                  $('#search').keyup(function(e) {
                     if(e.keyCode == 13) {
                        search();
                      }
                  });
            });
        </script>
</head>
<body>
        <div id="container">
             <input type="text" id="search" placeholder="Search Tutorials Here... Ex: Java, Php, Jquery..."/>
             <input type="button" id="button" value="Search" />
             <ul id="result"></ul>
        </div>
  </body>
<html>