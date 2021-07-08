

<?php

$username="basma";
setcookie('usernamecookie',$username,time() + (86400 * 2));

var_dump($_COOKIE);
if (isset($_COOKIE['usernamecookie'])) {
	echo "welcome ".$_COOKIE['usernamecookie'];
	//setcookie('usernamecookie',"",time() - (86400 * 2));
}
else{
	echo "welcome user";
}


?>