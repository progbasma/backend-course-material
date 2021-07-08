<?php

/*filter
filter_var

types:
filter_validate
filter_sanitize
*/

$formerror='';

$email='prog.basmagmail.com';
$email2='prog<script>alert();</script@gmail.com';
$email3='progom';


$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
if (preg_match($regex, $email)) {
 echo "<br>".$email . " is a valid email. We can accept it.";
} else { 
 echo "<br>".$email . " is an invalid email. Please try again.";
}   






if(filter_var($email,FILTER_VALIDATE_EMAIL)==false)
{
	echo "this is not email address";

}
else{
	echo "this is email address";

}


echo "<br>". filter_var($email3,FILTER_SANITIZE_EMAIL);


if ($_SERVER['REQUEST_METHOD']=='POST') {
   
	$emailsan=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    if(filter_var($emailsan,FILTER_VALIDATE_EMAIL)==false)
    {
    	$formerror='<p style="color: red;background: pink;padding-left: 10px;"> this is not email address</p>';
    	
    }
    else{
    	$formerror='<p style="color: green;background: lightgreen;padding-left: 10px;"> this is email address</p>';
    }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
		<label>email</label>
		<input type="text" name="email" placeholder="enter email">
		<button>sign in</button>
		<div><?php echo $formerror;?></div>
	</form>

</body>
</html>