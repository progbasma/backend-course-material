<?php
session_start();
$username='basma';
$_SESSION['usernamesession1']=$username;



//var_dump($_SESSION);

if(isset($_SESSION['usernamesession1']))
{
	echo "welcome ".$_SESSION['usernamesession1'];
}

if(!isset($_SESSION['views']))
{
	$_SESSION['views']=1;
}
else{
	$_SESSION['views']+=1;
	echo "<br>number of views = ".$_SESSION['views'];
}


?>