<html>
<head>
    <style>
    
    
        .p{
            position: relative;
            
        }
        .c{
            position: absolute;
            background-color: antiquewhite;
           
        }
    
    </style>
</head>


<body>


<form action="" method="post">
     Enter email: 
    <div class="p">
    
   <input type="text" placeholder="email" id="email" autocomplete="off"/>
    <div id="msg" class="c"></div>
    
    </div>

</form>








<script src="jquery-3.3.1.min.js"></script>


<script type="text/javascript">

$('document').ready(function(){
 

		
$('#email').on('blur', function(){
 	var email = $('#email').val();
     
    existmail(email);
 	
	
	function existmail(email)
	{
		$.ajax({
      url: 'chckuserext.php',
      type: 'post',
      data: {
      	'email_check' : 1,
      	'email' : email,
      },
      success: function(response){
      	
		  $("#msg").html(response);

		  
		
		
      }
 	});

		
	}
 	

 });
 
});



</script>
</body>
</html>