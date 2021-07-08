<?php
session_start();
$_SESSION['username'] = "basma";

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  width:23%;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 100px;
  overflow: auto;
  
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

#chat{
	
	 
	  margin: 5px 15px 10px 10px;

    height: 250px;
  
    overflow-y: auto;
	overflow-x:hidden;
    border: 1px solid #b3b3b3;
    padding: 10px;
}
.chat-popup h3{
	text-align:center;
}


</style>
</head>
<body>

<h2>Popup Chat Window</h2>
<p>Click on the button at the bottom of this page to open the chat form.</p>
<p>Note that the button and the form is fixed - they will always be positioned to the bottom of the browser window.</p>

<button class="open-button" onclick="openForm()">Chat</button>


			
<div class="chat-popup" id="myForm">
<h3>Welcome 
                <?php
                
                echo $_SESSION['username'];
                ?>
 </h3>
				
 <div id="chat"></div>

  <form action="" class="form-container" method="post" id="msgform">
    

		
    <textarea placeholder="Type message.." name="message" class="textarea" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}
</script>

<script src="jquery-3.3.1.min.js"></script>
<script type="text/javascript">
    

    LoadChat();
    

    setInterval(LoadChat(), 1000);


    function LoadChat() {
        $.post('messages.php?action=getMessages', function (response) {

            var scrollpos = $('#chat').scrollTop();
         
            var scrollHeight = $('#chat').prop('scrollHeight');

            $('#chat').html(response);
            if (scrollpos < scrollHeight){
                scrollpos =scrollHeight;
            $('#chat').scrollTop(scrollpos);

            } else{
                $('#chat').scrollTop($('#chat').prop('scrollHeight'));
            }

        })
    }
    $('.textarea').keyup(function(e){
            //alert(e.which);
        if (e.which == 13){
            //alert('enter is pressed')
            $('form').submit();
        }
        });
    $('form').submit(function () {
        //alert('form is submit jquery');
        var message = $('.textarea').val();
        $.post('messages.php?action=sendMessage&message='+message, function (response) {
            //alert(response);
            if (response==1){
                LoadChat();
                document.getElementById('msgform').reset();
            }
        });
        return false;
    })
</script>

</body>
</html>
