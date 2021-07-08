<?php

echo "welcome to our first php file";

/*variable*/
$variablename1='basma ahmed';
echo "<br>".$variablename1;
$variablename1='rody ahmed';
echo "<br>".$variablename1;


/*constant*/
define("variablename2", "Welcome to W3Schools.com!");
echo "<br>".variablename2;
define("variablename2", "Welcome");
echo "<br>".variablename2;

/*global variable*/
$v1=10;
$v2=20;
echo "<br>";
print_r($GLOBALS);

echo "<pre>";
var_dump($GLOBALS);

echo "</pre>";
echo "<br>".$GLOBALS['v1'];

/*superglobals*/

echo "<pre>";
var_dump($_SERVER);

echo "</pre>";
echo "<br>".$_SERVER['PHP_SELF'];
echo "<br>".$_SERVER['REQUEST_METHOD'];
echo "<br>".$_SERVER['QUERY_STRING'];
echo "<br>".$_SERVER['HTTP_REFERER'];



?>

<!DOCTYPE html>
<html>
<body>

	

</body>
</html>

