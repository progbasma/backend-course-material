<?php
session_start();
if (isset($_SESSION['usernamesession1'])) {
	echo "welcome ".$_SESSION['usernamesession1'];
}
else{
	echo "welcome user";
}


if (isset($_COOKIE['usernamecookie'])) {
	echo "welcome from cookie";
}

?>